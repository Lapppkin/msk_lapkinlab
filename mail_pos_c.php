<?php
    session_start();
    if (md5($_POST['norobot']) == $_SESSION['randomnr2'])   { 
$sitename = "msk.lapkinlab.ru";
$to  = 'akapinos@lapkinlab.ru' . ', ';
//$to .= 'lapppkin@yahoo.com' . ', ';
//$to .= 'pochta@lapkinlab.ru' . ', ';
//$to .= 'order@lapkinlab.planfix.ru';

$name = trim($_POST["your-name"]);
$phone = trim($_POST["your-phone"]);
$email = trim($_POST["your-email"]);
$site = trim($_POST["your-site"]);
$messages = trim($_POST["your-message"]);
$url = trim($_POST["url"]);

$subject = "SITE: MSK : NEW ORDER \"$sitename\"";
$message = '
<html>
    <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Заявка с сайта '.$sitename.'</title>
    </head>
    <body>
    <p>Заявка с сайта '.$sitename.'</p>
    <br>
        <p>Имя: '.$name.'</p>
        <p>Почта: '.$email.'</p>
        <p>Телефон: '.$phone.'</p>
        <p>Сайт: '.$site.'</p>
        <p>Сообщение: '.$messages.'</p>
        <br>
        <p>Откуда заявка: '.$url.'</p>
    </body>
</html>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: Интернет-агенство msk.lapkinlab.ru <mail@lapkinlab.ru>\r\n";
$headers .= 'Cc: akapinos@lapkinlab.ru' . "\r\n";
$headers .= "Bcc: akapinos@lapkinlab.ru\r\n";
mail($to, $subject, $message, $headers);

$to2 = 'akapinos@lapkinlab.ru';
$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = @$_SERVER['REMOTE_ADDR'];
if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
else $ip = $remote;
$subject = "SITE: MSK : NEW ORDER \"$sitename\"";
$message = '
<html>
    <head>
   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
        <title>Заявка с сайта '.$sitename.'</title>
    </head>
    <body>
    <p>Заявка с сайта '.$sitename.'</p>
    <br>
        <p>Имя: '.$name.'</p>
        <p>Почта: '.$email.'</p>
        <p>Телефон: '.$phone.'</p>
        <p>Сайт: '.$site.'</p>
        <p>Сообщение: '.$messages.'</p>
        <br>
        <p>Откуда заявка: '.$url.'</p>
        <p>IP: '.$ip.'</p>
    </body>
</html>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type: text/html; charset=windows-1251 \r\n";
$headers .= "From: Интернет-агенство msk.lapkinlab.ru <mail@lapkinlab.ru>\r\n";
$headers .= 'Cc: akapinos@lapkinlab.ru' . "\r\n";
$headers .= "Bcc: akapinos@lapkinlab.ru\r\n";
mail($to2, $subject, $message, $headers);
$url=$url.'#spasibo';
//header("Location: $url#spasibo");
        $json['success'] = 1;
        $json['url'] = $url;
        echo json_encode($json);
    }else{  
        $url = trim($_POST["url"]);
        $json['error'] = 1;
        echo json_encode($json);
            //header("Location: $url#error");
    }
?>