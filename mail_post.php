<?php

require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

require 'vendor/autoload.php';

\CModule::IncludeModule('iblock');

class RequestHelper
{
    public $name;
    public $phone;
    public $email;
    public $site;
    public $messages;
    public $form_name;
    public $url;
    public $ip;
    public $datetime;

    public $amoSubdomain = 'lapkinlab';
    public $amoLogin     = 'amo@lapkinlab.ru';
    public $amoApiKey    = 'e780a5c02bcf2da233ec688b72d90ee22301d37b';

    public function __construct()
    {
        $this->name     = \trim($_POST['your-name']) ? : 'не указано';
        $this->phone    = \trim($_POST['your-phone']) ? : '';
        $this->email    = \trim($_POST['your-email']) ? : '';
        $this->site     = \trim($_POST['your-site']) ? : '';
        $this->messages = \trim($_POST['your-message']) ? : '';
        $this->form_name = \trim($_POST['formname']) ? : '';
        $this->url      = \trim($_POST['url']);

        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = @$_SERVER['REMOTE_ADDR'];

        if (\filter_var($client, FILTER_VALIDATE_IP)) {
            $this->ip = $client;
        } elseif (\filter_var($forward, FILTER_VALIDATE_IP)) {
            $this->ip = $forward;
        } else {
            $this->ip = $remote;
        }

        $this->datetime = \date('H:i:s - d.m.Y');
    }

    public function createBlockElement($isNormalRequest = true)
    {
        $element     = new \CIBlockElement;
        $elementName = "Заявка от {$this->datetime} ({$this->name})";

        if ($isNormalRequest === false) {
            $elementName = "СПАМ! {$elementName} ???";
        }

        $elementFields = [
            'ACTIVE'            => 'Y',
            'IBLOCK_SECTION_ID' => false,
            'IBLOCK_ID'         => 2,
            'NAME'              => $elementName,
            'PROPERTY_VALUES'   => [
                4  => $this->name,
                5  => $this->phone,
                6  => $this->email,
                7  => $this->site,
                8  => $this->messages,
                9  => $this->ip,
                10 => $this->url,
                11 => $this->form_name,
            ],
        ];

        $element->Add($elementFields);
    }

    public function sendEmail($to = [])
    {
        if (\count($to) === 0) {
            return;
        }

        $to = \implode(', ', $to);

        $subject = 'SITE: MSK : NEW ORDER «msk.lapkinlab.ru»';
        $message = <<<HTML
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />

        <title>Заявка с сайта «msk.lapkinlab.ru»</title>
    </head>

    <body>
        <p>Заявка с сайта «msk.lapkinlab.ru»</p>
        <p>Форма: {$this->form_name}</p>

        <br>

        <p>Имя: {$this->name}</p>
        <p>Почта: {$this->email}</p>
        <p>Телефон: {$this->phone}</p>
        <p>Сайт: {$this->site}</p>
        <p>Сообщение: {$this->messages}</p>

        <br>

        <p>Страница отправки: {$this->url}</p>
        <p>IP отправки: {$this->ip}</p>
        <p>Заявка от {$this->datetime} ({$this->name})</p>
    </body>
</html>
HTML;

        $headers = <<<HEADERS
MIME-Version: 1.0
Content-type: text/html; charset=windows-1251
From: msk.lapkinlab.ru <mail@lapkinlab.ru>
HEADERS;

        \mail($to, $subject, $message, $headers);
    }
}

$requestHelper = new RequestHelper();

if (isset($_POST['name']) && $_POST['name'] === '') {
    $to = [
        'lapppkin@yahoo.com',
        'pochta@lapkinlab.ru',
        'order@lapkinlab.planfix.ru',
    ];

    $requestHelper->createBlockElement(true);
    $requestHelper->sendEmail($to);

    try {
        $amo = new \AmoCRM\Client($requestHelper->amoSubdomain, $requestHelper->amoLogin, $requestHelper->amoApiKey);

        $lead                        = $amo->lead;
        $lead['name']                = \mb_convert_encoding('Заказ звонка с сайта «msk.lapkinlab.ru»', 'utf-8', 'windows-1251');
        $lead['responsible_user_id'] = 3369325;

        $id = $lead->apiAdd();

        $name     = \mb_convert_encoding($requestHelper->name, 'utf-8', 'windows-1251');
        $phone    = \mb_convert_encoding($requestHelper->phone, 'utf-8', 'windows-1251');
        $email    = \mb_convert_encoding($requestHelper->email, 'utf-8', 'windows-1251');
        $site     = \mb_convert_encoding($requestHelper->site, 'utf-8', 'windows-1251');
        $messages = \mb_convert_encoding($requestHelper->messages, 'utf-8', 'windows-1251');
        $form_name = \mb_convert_encoding($requestHelper->formname, 'utf-8', 'windows-1251');

        $contact                    = $amo->contact;
        $contact['name']            = $name;
        $contact['linked_leads_id'] = [(int) $id];

        $contact->addCustomField(53921, $phone, 'WORK');
        $contact->addCustomField(78451, [[$site]]);
        $contact->addCustomField(53923, [[$email, 'PRIV']]);
        $contact->addCustomField(89745, [[$messages]]);

        $contact->apiAdd();
    } catch (\AmoCRM\Exception $e) {
        $to = [
            'amo@lapkinlab.ru',
        ];

        $requestHelper->sendEmail($to);
    } finally {
        header('Location: /#spasibo');
    }

} else {
    $requestHelper->createBlockElement(false);

    \header('Location: /#error');
}

require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/epilog_before.php';
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/epilog_after.php';
