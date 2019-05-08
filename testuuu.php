<?php

                // require_once('hamtim-amocrm.php');
                // $amo = new HamtimAmocrm('amo@lapkinlab.ru', '9430d33c516e102f0f88155f8f2d3dd098e93ab3', 'lapkinlab');

                // if(!$amo->auth) die('Нет соединения с amoCRM');

                // $path = '/private/api/v2/json/leads/list';
                    
                // $ifModifiedSince = date('D, d M Y H:i:s', (time()-1*24*3600));

                // $fields = array();

                // $leads = $amo->q($path, $fields, $ifModifiedSince);
                    
                // if(!$leads) die('Сделок в работе не найдено');

                // echo '<pre>';   
                // print_r($leads);
                // echo '</pre>';

        //         $name = 'Иван';
        //         $contact_phone = '89998887766';

        //         $path = '/private/api/v2/json/leads/set';
        //         $fields['request']['leads']['add']=array(
        //             array(
        //                 'name'=>'Заявка с сайта от: '.$name,
        //                 'status_id'=>1,
        //                 'tags' => 'akapinos',
        //                 'custom_fields'=>array(
								// array(
								// 	'id'=>1404981,
								// 	'values'=> array(
								// 		array(
								// 			'value'=>$contact_phone,
								// 			'enum'=>'MOB'
								// 		)
								// 	)
								// )
						  //                   )
        //         	)
        //         );
        //         $leadAnswer = $amo->q($path, $fields);


require 'vendor/autoload.php';

// if(isset($_POST['phone'])) {

  try {
    
    // Создание клиента
    $subdomain = 'lapkinlab';            // Поддомен в амо срм
    $login     = 'amo@lapkinlab.ru';            // Логин в амо срм
    $apikey    = '9430d33c516e102f0f88155f8f2d3dd098e93ab3';            // api ключ


    $amo = new \AmoCRM\Client($subdomain, $login, $apikey);

    // Вывести полученые из амо данные
    // echo '<pre>';
    // print_r($amo->account->apiCurrent());
    // echo '</pre>';

    // создаем лида
    $lead = $amo->lead;
    $lead['name'] = 'Новая заявка с сайта msk.lapkinlab.ru';
    $lead['responsible_user_id'] = 3360418; // ID ответсвенного 
    // $lead['pipeline_id'] = 1207249; // ID воронки

    // $lead->addCustomField(305117, [ // ID  поля в которое будт приходить заявки
    //     [$_POST['city']], // сюда вписать значение из атрибута "name" пример: <input name="phone">
    // ]);

    // $lead->addCustomField(595039, [
    //     [$_POST['utm_source']],
    // ]);

    // $lead->addCustomField(595041, [
    //     [$_POST['utm_medium']],
    // ]);

    // $lead->addCustomField(595043, [
    //     [$_POST['utm_campaign']],
    // ]);

    // $lead->addCustomField(595045, [
    //     [$_POST['utm_content']],
    // ]);

    // $lead->addCustomField(595047, [
    //     [$_POST['utm_term']],
    // ]);

    $id = $lead->apiAdd();

    // Получение экземпляра модели для работы с контактами
    $contact = $amo->contact;




            $name = $_GET["name"];
            $phone = trim($_POST["your-phone"]);
            $email = trim($_POST["your-email"]);
            $site = trim($_POST["your-site"]);
            $messages = trim($_POST["your-message"]);

            if(empty($name)){$name='Не указано';}

$phone='+79998887766';
$site='test.ru';
$email='test@test.test';
$messages='test';
                        $contact['name'] = isset($name) ? $name : 'Не указано';
                        $contact['linked_leads_id'] = [(int)$id];
                        $contact->addCustomField(53921, $phone, 'WORK');
                        $contact->addCustomField(78451, [$site,]);
                        $contact->addCustomField(53923, [[$email, 'PRIV'],]);
                        $contact->addCustomField(89745, [[$messages,],]);

    // Добавление нового контакта и получение его ID
    $id = $contact->apiAdd();


  } catch (\AmoCRM\Exception $e) {
      printf('Error (%d): %s' . PHP_EOL, $e->getCode(), $e->getMessage());
  }


            header("Location: https://msk.lapkinlab.ru/#spasibo");

?>