<?php

                // require_once('hamtim-amocrm.php');
                // $amo = new HamtimAmocrm('amo@lapkinlab.ru', '9430d33c516e102f0f88155f8f2d3dd098e93ab3', 'lapkinlab');

                // if(!$amo->auth) die('��� ���������� � amoCRM');

                // $path = '/private/api/v2/json/leads/list';
                    
                // $ifModifiedSince = date('D, d M Y H:i:s', (time()-1*24*3600));

                // $fields = array();

                // $leads = $amo->q($path, $fields, $ifModifiedSince);
                    
                // if(!$leads) die('������ � ������ �� �������');

                // echo '<pre>';   
                // print_r($leads);
                // echo '</pre>';

        //         $name = '����';
        //         $contact_phone = '89998887766';

        //         $path = '/private/api/v2/json/leads/set';
        //         $fields['request']['leads']['add']=array(
        //             array(
        //                 'name'=>'������ � ����� ��: '.$name,
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
    
    // �������� �������
    $subdomain = 'lapkinlab';            // �������� � ��� ���
    $login     = 'amo@lapkinlab.ru';            // ����� � ��� ���
    $apikey    = '9430d33c516e102f0f88155f8f2d3dd098e93ab3';            // api ����


    $amo = new \AmoCRM\Client($subdomain, $login, $apikey);

    // ������� ��������� �� ��� ������
    // echo '<pre>';
    // print_r($amo->account->apiCurrent());
    // echo '</pre>';

    // ������� ����
    $lead = $amo->lead;
    $lead['name'] = '����� ������ � ����� msk.lapkinlab.ru';
    $lead['responsible_user_id'] = 3360418; // ID ������������� 
    // $lead['pipeline_id'] = 1207249; // ID �������

    // $lead->addCustomField(305117, [ // ID  ���� � ������� ���� ��������� ������
    //     [$_POST['city']], // ���� ������� �������� �� �������� "name" ������: <input name="phone">
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

    // ��������� ���������� ������ ��� ������ � ����������
    $contact = $amo->contact;




            $name = $_GET["name"];
            $phone = trim($_POST["your-phone"]);
            $email = trim($_POST["your-email"]);
            $site = trim($_POST["your-site"]);
            $messages = trim($_POST["your-message"]);

            if(empty($name)){$name='�� �������';}

$phone='+79998887766';
$site='test.ru';
$email='test@test.test';
$messages='test';
                        $contact['name'] = isset($name) ? $name : '�� �������';
                        $contact['linked_leads_id'] = [(int)$id];
                        $contact->addCustomField(53921, $phone, 'WORK');
                        $contact->addCustomField(78451, [$site,]);
                        $contact->addCustomField(53923, [[$email, 'PRIV'],]);
                        $contact->addCustomField(89745, [[$messages,],]);

    // ���������� ������ �������� � ��������� ��� ID
    $id = $contact->apiAdd();


  } catch (\AmoCRM\Exception $e) {
      printf('Error (%d): %s' . PHP_EOL, $e->getCode(), $e->getMessage());
  }


            header("Location: https://msk.lapkinlab.ru/#spasibo");

?>