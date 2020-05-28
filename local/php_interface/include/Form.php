<?php


namespace LapkinLab;

use Bitrix\Main\Application;
use Respect\Validation\Validator as v;
use LapkinLab\CyrillicUrlValidationRule as vCyrUrl;

/**
 * Class Form
 *
 * @package LapkinLab
 */
class Form
{
    use Response;

    private const IBLOCK = 2;

    protected $request;
    protected $views_dir;

    protected $form_id;
    protected $name;
    protected $phone;
    protected $email;
    protected $message;
    protected $tarif;
    protected $site_type;

    protected $required; // данные о required полях

    protected $site;
    protected $url;
    protected $ip;
    protected $datetime;

    protected const VALIDATE_ERRORS = array(
        'ok' => 'OK',
        'sessid' => 'Ошибка сессии. Попробуйте перезагрузить страницу',
        'form' => 'Ошибка формы',
        'required' => 'Обязательно для заполнения',
        'format' => array(
            'email' => 'Email в неверном формате',
            'phone' => 'Телефон в неверном формате',
            'site' => 'Некорректный URL сайта',
            'default' => 'Неверный формат данных',
        ),
    );

    /**
     * Form constructor.
     *
     * @throws \Bitrix\Main\SystemException
     */
    public function __construct() {
        $application = Application::getInstance();
        $context = $application->getContext();

        $this->request = $context->getRequest();
        $this->views_dir = ROOT . VIEWS_DIR;

        $this->required = explode(',', base64_decode($this->request->get('required')));

        $this->form_id = $this->request->get('id');
        $this->name = $this->request->get('name');
        $this->phone = $this->request->get('phone');
        $this->email = $this->request->get('email');
        $this->site = $this->request->get('site');
        $this->message = $this->request->get('message');
        $this->tarif = $this->request->get('tarif');
        $this->site_type = $this->request->get('site_type');

        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = @$_SERVER['REMOTE_ADDR'];

        if (filter_var($client, FILTER_VALIDATE_IP)) {
            $this->ip = $client;
        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
            $this->ip = $forward;
        } else {
            $this->ip = $remote;
        }
        $this->datetime = date('d.m.Y H:i:s');

        $this->validate();
    }

    /**
     * Запись в элемент инфоблока.
     */
    public function createIBlockElement()
    {
        $element = new \CIBlockElement;
        $elementName = "Заявка от {$this->datetime} ({$this->name})";
        $elementFields = array(
            'ACTIVE' => 'Y',
            'IBLOCK_SECTION_ID' => false,
            'IBLOCK_ID' => self::IBLOCK,
            'NAME' => $elementName,
            'PROPERTY_VALUES' => array(
                4  => $this->name,
                5  => $this->phone,
                6  => $this->email,
                7  => $this->site,
                8  => $this->message,
                9  => $this->ip,
                10 => $this->url,
                11 => $this->tarif . $this->site_type,
                12 => $this->form_id,
            ),
        );
        return $element->Add($elementFields);
    }

    /**
     * Отправка почты.
     *
     * @param array $to
     *
     * @return bool|void
     */
    public function sendEmail($to = array(SITE_CONFIG['email']))
    {
        if (count($to) === 0) return;

        $to = implode(', ', $to);
        $subject = 'SITE: MSK : NEW ORDER «msk.lapkinlab.ru»';

        $headers = <<<HEADERS
MIME-Version: 1.0
Content-type: text/html; charset=utf-8
From: msk.lapkinlab.ru <mail@lapkinlab.ru>
HEADERS;

        $message = <<<BODY
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Заявка с сайта «msk.lapkinlab.ru»</title>
    </head>
    <body>
        <p>Заявка с сайта «msk.lapkinlab.ru»</p>
        <p>Форма: {$this->form_id}</p>
        <p>Имя: {$this->name}<br>
            Почта: {$this->email}<br>
            Телефон: {$this->phone}<br>
            Сайт: {$this->site}<br>
            Сообщение: {$this->message}<br>
        </p>
        <p>Тариф: {$this->tarif}<br>
            Тип сайта: {$this->site_type}
        </p>
        <p>Страница отправки: {$this->url}<br>
            IP отправки: {$this->ip}<br>
            Заявка от {$this->datetime} ({$this->name})
        </p>
    </body>
</html>
BODY;
        return bxmail($to, $subject, $message, $headers);
    }

    /**
     * Создание лида в amoCRM.
     */
    public function createAmoLead()
    {
        try {
            $amo = new \AmoCRM\Client(AMO_CONFIG['subdomain'], AMO_CONFIG['login'], AMO_CONFIG['api_key']);

            $lead = $amo->lead;
            $lead['name'] = 'Заявка с сайта Msk.LapkinLab.ru';
            $lead['responsible_user_id'] = 3369325;

            $id = $lead->apiAdd();

            $contact = $amo->contact;
            $contact['name'] = $this->name;
            $contact['linked_leads_id'] = [(int) $id];

            $contact->addCustomField(53921, $this->phone, 'WORK');
            $contact->addCustomField(78451, [[$this->site]]);
            $contact->addCustomField(53923, [[$this->email, 'PRIV']]);
            $contact->addCustomField(373323, [[$this->message]]); // 89745 // старый id
            $contact->addCustomField(370537, [[$this->form_id, 'FORM_NAME']]);

            $contact->apiAdd();
        } catch (\AmoCRM\Exception $e) {
            $to = array(
                SITE_CONFIG['send_to_amo'],
            );
            return $this->sendEmail($to);
        } finally {
            return true;
        }
    }

    public function generateLeadBitrix24()
    {
        define('CRM_HOST', 'lapkinlab.bitrix24.ru');
        define('CRM_PORT', '443');
        define('CRM_PATH', '/crm/configs/import/lead.php');

        define('CRM_LOGIN', 'vkorkin@lapkinlab.ru');
        define('CRM_PASSWORD', '7Ol0hans%H1b');

        $postData = [
            'TITLE' => "Форма: {$this->form_id}",
            'PHONE_MOBILE' => $this->phone,
            'EMAIL_HOME' => $this->email,
            'NAME' => $this->name,
            'SOURCE_ID' => 'WEB',
            'UF_CRM_1589095170671' => $this->site,
            'COMMENTS' => $this->message,
        ];

        if (defined('CRM_AUTH')) {
            $postData['AUTH'] = CRM_AUTH;
        } else {
            $postData['LOGIN'] = CRM_LOGIN;
            $postData['PASSWORD'] = CRM_PASSWORD;
        }

        if ($fp = fsockopen("ssl://" . CRM_HOST, CRM_PORT, $errno, $errstr, 30)) {
            $strPostData = '';
            foreach ($postData as $key => $value)
                $strPostData .= ($strPostData == '' ? '' : '&') . $key . '=' . urlencode($value);

            $str = "POST " . CRM_PATH . " HTTP/1.0\r\n";
            $str .= "Host: " . CRM_HOST . "\r\n";
            $str .= "Content-Type: application/x-www-form-urlencoded\r\n";
            $str .= "Content-Length: " . strlen($strPostData) . "\r\n";
            $str .= "Connection: close\r\n\r\n";
            $str .= $strPostData;

            fwrite($fp, $str);
        }
    }

    /**
     * Валидация полей.
     *
     * @return array
     */
    public function validate()
    {
        $errors = array();

        // Проверка сессии
        if (check_bitrix_sessid()) {

            // Проверка required-полей
            $this->required($errors);

            // Валидация полей
            if (!empty($this->name) && !v::length(1, 60)->validate($this->name)) {
                $errors['name'][] = self::VALIDATE_ERRORS['format']['default'];
            }
            if (!empty($this->email) && !v::noWhitespace()->email()->validate($this->email)) {
                $errors['email'][] = self::VALIDATE_ERRORS['format']['email'];
            }
            if (!empty($this->phone) && !v::noWhitespace()->phone()->validate($this->phone)) {
                $errors['phone'][] = self::VALIDATE_ERRORS['format']['phone'];
            }
            if (!empty($this->site) && (
                    !v::noWhitespace()->domain()->validate($this->site)
                    && !v::noWhitespace()->url()->validate($this->site)
                    && !(new vCyrUrl())->validate($this->site)
                )
            ) {
                $errors['site'][] = self::VALIDATE_ERRORS['format']['site'];
            }
            if (!empty($this->message) && !v::length(1, 1000)->validate($this->message)) {
                $errors['message'][] = self::VALIDATE_ERRORS['format']['default'];
            }

        } else {
            $errors['sessid'] = self::VALIDATE_ERRORS['sessid'];
        }
        return $errors;
    }

    /**
     * Обязательное поле?
     *
     * @param $field
     *
     * @return bool
     */
    protected function isRequired($field)
    {
        return in_array($field, $this->required, true);
    }

    /**
     * Проверка required полей.
     *
     * @param $errors
     *
     * @return void
     */
    protected function required(&$errors): void
    {
        foreach ($this->required as $require) {
            if (empty($this->$require)) {
                $errors[$require][] = self::VALIDATE_ERRORS['required'];
            }
        }
    }

}
