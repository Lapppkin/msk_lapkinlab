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
    public $url;
    public $ip;
    public $datetime;

    public $amoSubdomain = 'lapkinlab';
    public $amoLogin     = 'amo@lapkinlab.ru';
    public $amoApiKey    = '9430d33c516e102f0f88155f8f2d3dd098e93ab3';

    public function __construct()
    {
        $this->name     = \trim(\mb_convert_encoding($_POST['your-name'], 'utf8', 'cp1251')) ? : 'не указано';
        $this->phone    = \trim(\mb_convert_encoding($_POST['your-phone'], 'utf8', 'cp1251')) ? : '';
        $this->email    = \trim(\mb_convert_encoding($_POST['your-email'], 'utf8', 'cp1251')) ? : '';
        $this->site     = \trim(\mb_convert_encoding($_POST['your-site'], 'utf8', 'cp1251')) ? : '';
        $this->messages = \trim(\mb_convert_encoding($_POST['your-message'], 'utf8', 'cp1251')) ? : '';
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
            ],
        ];

        $element->Add($elementFields);
    }

    public function sendEmail($to = [])
    {
        if (\count($to) === 0) {
            return;
        }

        /**
         * @var string $to
         */
        $to = \implode(', ', $to);

        $subject = 'SITE: MSK : NEW ORDER «msk.lapkinlab.ru»';
        $message = <<<HTML
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        
        <title>Заявка с сайта «msk.lapkinlab.ru»</title>
    </head>
    
    <body>
        <p>Заявка с сайта «msk.lapkinlab.ru»</p>
        
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
Content-type: text/html; charset=UTF-8
From: msk.lapkinlab.ru <mail@lapkinlab.ru>
HEADERS;

        \mail($to, $subject, $message, $headers);
    }
}

$requestHelper = new RequestHelper();

if (isset($_POST['name']) && $_POST['name'] === '') {
    $to = [
        'akapinos@lapkinlab.ru',
        'lapppkin@yahoo.com',
        'pochta@lapkinlab.ru',
        'order@lapkinlab.planfix.ru',
    ];

    $requestHelper->createBlockElement(true);
    $requestHelper->sendEmail($to);

    try {
        $amo = new \AmoCRM\Client($requestHelper->amoSubdomain, $requestHelper->amoLogin, $requestHelper->amoApiKey);

        $lead                        = $amo->lead;
        $lead['name']                = 'Заказ звонка с сайта «msk.lapkinlab.ru»';
        $lead['responsible_user_id'] = 3369325;

        $id = $lead->apiAdd();

        $contact                    = $amo->contact;
        $contact['name']            = $requestHelper->name;
        $contact['linked_leads_id'] = [(int) $id];

        $contact->addCustomField(53921, $requestHelper->phone, 'WORK');
        $contact->addCustomField(78451, [[$requestHelper->site,]]);
        $contact->addCustomField(53923, [[$requestHelper->email, 'PRIV']]);
        $contact->addCustomField(89745, [[$requestHelper->messages,]]);

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
