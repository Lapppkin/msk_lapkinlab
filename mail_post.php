<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if(isset($_POST)){
    if(isset($_POST['name']) and $_POST['name'] == ""){
        $sitename = "msk.lapkinlab.ru";
        $to  = 'akapinos@lapkinlab.ru' . ', ';
        $to .= 'lapppkin@yahoo.com' . ', ';
        $to .= 'pochta@lapkinlab.ru' . ', ';
        $to .= 'order@lapkinlab.planfix.ru';


            $name = trim($_POST["your-name"]);
            $phone = trim($_POST["your-phone"]);
            $email = trim($_POST["your-email"]);
            $site = trim($_POST["your-site"]);
            $messages = trim($_POST["your-message"]);
            $url = trim($_POST["url"]);
            if(empty($name)){$name='Не указано';}

            $client  = @$_SERVER['HTTP_CLIENT_IP'];
            $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
            $remote  = @$_SERVER['REMOTE_ADDR'];
            if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
            elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
            else $ip = $remote;

                CModule::IncludeModule("iblock");
                $el = new CIBlockElement;
                $PROP = array();
                $PROP[4] = $name;
                $PROP[5] = $phone;
                $PROP[6] = $email;
                $PROP[7] = $site;
                $PROP[8] = $messages;
                $PROP[9] = $ip;
                $PROP[10] = $url;
                
            $date_today = date("d.m.y");
            $today[1] = date("H:i:s");

             $arLoadProductArray = Array(
              "IBLOCK_SECTION_ID" => false,
              "IBLOCK_ID"      => 2,
              "PROPERTY_VALUES"=> $PROP,
              "NAME"           => "Заявка от ".$today[1]." - ".$date_today. " (".$name.")",
              "ACTIVE"         => "Y"
              );

            $el->Add($arLoadProductArray);

            $subject = "SITE: MSK : NEW ORDER \"$sitename\"";
            $message = '
            <html>
                <head>
               <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
                    <title>Заявка с сайта  '.$sitename.'</title>
                </head>
                <body>
                <p>Заявка с сайта  '.$sitename.'</p>
                <br>
                    <p>Имя: '.$name.'</p>
                    <p>Почта: '.$email.'</p>
                    <p>Телефон: '.$phone.'</p>
                    <p>Сайт: '.$site.'</p>
                    <p>Сообщение: '.$messages.'</p>
                    <br>
                    <p>Страница отправки: '.$url.'</p>
                    <p>IP отправки: '.$ip.'</p>
                    <p>Заявка от '.$today[1].' - '.$date_today. ' ('.$name.')</p>
                </body>
            </html>';
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= "Content-type: text/html; charset=windows-1251 \r\n";
            $headers .= "From: Интернет-агенство msk.lapkinlab.ru <mail@lapkinlab.ru>\r\n";
            $headers .= 'Cc: akapinos@lapkinlab.ru' . "\r\n";
            $headers .= "Bcc: akapinos@lapkinlab.ru\r\n";
            mail($to, $subject, $message, $headers);


require 'vendor/autoload.php';
  try {
    $subdomain = 'lapkinlab';
    $login     = 'amo@lapkinlab.ru';
    $apikey    = '9430d33c516e102f0f88155f8f2d3dd098e93ab3';
    $amo = new \AmoCRM\Client($subdomain, $login, $apikey);
    $lead = $amo->lead;
    $title = mb_convert_encoding('Новая заявка с сайта msk.lapkinlab.ru', 'utf-8', 'windows-1251');
    $lead['name'] = $title;
    $lead['responsible_user_id'] = 3369325;
    // $lead['pipeline_id'] = 1207249;
        // echo '<pre>';
        // print_r($amo->account->apiCurrent());
        // echo '</pre>';
    $id = $lead->apiAdd();
    $contact = $amo->contact;
            // $name = $_GET["name"];
            // $phone = $_GET["phone"];
            // $email = $_GET["email"];
            // $site = $_GET["site"];
            // $messages = $_GET["messages"];
            if(empty($name)){$name='Не указано';}
            $name = mb_convert_encoding($name, 'utf-8', 'windows-1251');
            if(empty($phone)){$phone='';}
            $phone = mb_convert_encoding($phone, 'utf-8', 'windows-1251');
            if(empty($email)){$email='';}
            $email = mb_convert_encoding($email, 'utf-8', 'windows-1251');
            if(empty($site)){$site='';}
            $site = mb_convert_encoding($site, 'utf-8', 'windows-1251');
            if(empty($messages)){$messages='';}
            $messages = mb_convert_encoding($messages, 'utf-8', 'windows-1251');
                        $contact['name'] = $name;
                        $contact['linked_leads_id'] = [(int)$id];
                        $contact->addCustomField(53921, $phone, 'WORK');
                        $contact->addCustomField(78451, [[$site,],]);
                        $contact->addCustomField(53923, [[$email, 'PRIV'],]);
                        $contact->addCustomField(89745, [[$messages,],]);
    $id = $contact->apiAdd();
            header("Location: https://msk.lapkinlab.ru/#spasibo");
  } catch (\AmoCRM\Exception $e) {


                    $sitename = "msk.lapkinlab.ru";
        $to  = 'amo@lapkinlab.ru';


            $name = trim($_POST["your-name"]);
            $phone = trim($_POST["your-phone"]);
            $email = trim($_POST["your-email"]);
            $site = trim($_POST["your-site"]);
            $messages = trim($_POST["your-message"]);
            $url = trim($_POST["url"]);
            if(empty($name)){$name='Не указано';}

            $client  = @$_SERVER['HTTP_CLIENT_IP'];
            $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
            $remote  = @$_SERVER['REMOTE_ADDR'];
            if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
            elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
            else $ip = $remote;

            $date_today = date("d.m.y");
            $today[1] = date("H:i:s");

            $subject = "SITE: MSK : NEW ORDER \"$sitename\"";
            $message = '
            <html>
                <head>
               <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
                    <title>Заявка с сайта  '.$sitename.'</title>
                </head>
                <body>
                <p>Заявка с сайта  '.$sitename.'</p>
                <br>
                    <p>Имя: '.$name.'</p>
                    <p>Почта: '.$email.'</p>
                    <p>Телефон: '.$phone.'</p>
                    <p>Сайт: '.$site.'</p>
                    <p>Сообщение: '.$messages.'</p>
                    <br>
                    <p>Страница отправки: '.$url.'</p>
                    <p>IP отправки: '.$ip.'</p>
                    <p>Заявка от '.$today[1].' - '.$date_today. ' ('.$name.')</p>
                </body>
            </html>';
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= "Content-type: text/html; charset=windows-1251 \r\n";
            $headers .= "From: Интернет-агенство msk.lapkinlab.ru <mail@lapkinlab.ru>\r\n";
            $headers .= 'Cc: akapinos@lapkinlab.ru' . "\r\n";
            $headers .= "Bcc: akapinos@lapkinlab.ru\r\n";
            mail($to, $subject, $message, $headers);
            header("Location: https://msk.lapkinlab.ru/#spasibo");
  }

            header("Location: https://msk.lapkinlab.ru/#spasibo");


            //header("Location: https://msk.lapkinlab.ru/testuuu.php?name=".$name."&phone=".$phone."&site=".$site."&email=".$email."&messages=".$messages);

    }else{

            $name = trim($_POST["your-name"]);
            $phone = trim($_POST["your-phone"]);
            $email = trim($_POST["your-email"]);
            $site = trim($_POST["your-site"]);
            $messages = trim($_POST["your-message"]);
            $url = trim($_POST["url"]);

            $client  = @$_SERVER['HTTP_CLIENT_IP'];
            $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
            $remote  = @$_SERVER['REMOTE_ADDR'];
            if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
            elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
            else $ip = $remote;

                CModule::IncludeModule("iblock");
                $el = new CIBlockElement;
                $PROP = array();
                $PROP[4] = $name;
                $PROP[5] = $phone;
                $PROP[6] = $email;
                $PROP[7] = $site;
                $PROP[8] = $messages;
                $PROP[9] = $ip;
                $PROP[10] = $url;
                
            $date_today = date("d.m.y");
            $today[1] = date("H:i:s");

             $arLoadProductArray = Array(
              "IBLOCK_SECTION_ID" => false,
              "IBLOCK_ID"      => 2,
              "PROPERTY_VALUES"=> $PROP,
              "NAME"           => "СПАМ! Заявка от ".$today[1]." - ".$date_today. " (".$name.") ???",
              "ACTIVE"         => "Y"
              );

            $el->Add($arLoadProductArray);

            header("Location: https://msk.lapkinlab.ru/#error");
    }
}else{
            header("Location: https://msk.lapkinlab.ru/#error");
}
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>