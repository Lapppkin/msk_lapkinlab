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
    use Lapkin;

    private const IBLOCK = 2;

    protected $request;
    protected $views_dir;

    protected $form_id;
    protected $name;
    protected $phone;
    protected $email;
    protected $message;

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
        $this->views_dir = ROOT . VIEWS_PATH;

        $this->required = explode(',', base64_decode($this->request->get('required')));

        $this->form_id = $this->request->get('id');
        $this->name = $this->request->get('name');
        $this->phone = $this->request->get('phone');
        $this->email = $this->request->get('email');
        $this->site = $this->request->get('site');
        $this->message = $this->request->get('message');

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
                11 => $this->form_id,
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
    public function sendEmail($to = array())
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
        <br>
        <p>Имя: {$this->name}</p>
        <p>Почта: {$this->email}</p>
        <p>Телефон: {$this->phone}</p>
        <p>Сайт: {$this->site}</p>
        <p>Сообщение: {$this->message}</p>
        <br>
        <p>Страница отправки: {$this->url}</p>
        <p>IP отправки: {$this->ip}</p>
        <p>Заявка от {$this->datetime} ({$this->name})</p>
    </body>
</html>
BODY;
        return mail($to, $subject, $message, $headers);
    }

    /**
     * Создание лида в amoCRM.
     */
    public function createAmoLead()
    {
        try {
            $amo = new \AmoCRM\Client(AMO_CONFIG['subdomain'], AMO_CONFIG['login'], AMO_CONFIG['api_key']);

            $lead = $amo->lead;
            $lead['name'] = 'Заказ звонка с сайта «msk.lapkinlab.ru»';
            $lead['responsible_user_id'] = 3369325;

            $id = $lead->apiAdd();

            $contact = $amo->contact;
            $contact['name'] = $this->name;
            $contact['linked_leads_id'] = [(int) $id];

            $contact->addCustomField(53921, $this->phone, 'WORK');
            $contact->addCustomField(78451, [[$this->site]]);
            $contact->addCustomField(53923, [[$this->email, 'PRIV']]);
            $contact->addCustomField(89745, [[$this->message]]);
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
