<?
if (!$USER->IsAdmin())
	return;

IncludeModuleLangFile(__FILE__);
$CRM = new CQSoftAmoCRM();
$arOption = array(
	'NO' => '',
	'PERSON_NAME' => '',
	'PERSON_SECOND_NAME' => '',
	'PERSON_LAST_NAME' => '',
	'PERSON_FULL_NAME' => '',
	'POSITION' => '',
	'COMPANY_NAME' => '',
	'COMPANY_WEB' => '',
	'COMPANY_ADDRESS' => '',
	'PHONE_WORK' => '',
	'PHONE_MOBILE' => '',
	'PHONE_HOME' => '',
	'PHONE_FAX' => '',
	'PHONE_OTHER' => '',
	'EMAIL_WORK' => '',
	'EMAIL_PERSONAL' => '',
	'EMAIL_OTHER' => '',
	'IM_ICQ' => '',
	'IM_JABBER' => '',
	'IM_SKYPE' => '',
	'IM_GTALK' => '',
	'IM_MSN' => '',
	'IM_OTHER' => '',
	'NOTE' => '');

$id = qsoft_amocrm::MODULE_ID;

foreach ($arOption as $key => $value) {
	$arr[$key] = GetMessage("AMOCRM_FIELD_$key"); 	//массив полей
}
$arOption = $arr;

$aTabs = array(
	array(
		"DIV" => "edit1",
		"TAB" => GetMessage("MYCAR_SETTINGS"),
		"ICON" => "mycar_settings",
		"TITLE" => GetMessage("MYCAR_SETTINGS_TITLE"),
	),
);
$tabControl = new CAdminTabControl("tabControl", $aTabs);

$domen = 1;
$email = 1;
$hash = 1;
$errorConnect = 1;
$current_domen = COption::GetOptionString($id, 'domen', '');
$current_email = COption::GetOptionString($id, 'email', '');
$current_hash = COption::GetOptionString($id, 'hash', '');
$current_object = COption::GetOptionString($id, 'object', '');
$current_status_deal = COption::GetOptionInt($id, 'status_deal', '');
$current_main_user = COption::GetOptionInt($id, 'main_user', '');
$current_tag = COption::GetOptionString($id, 'tag', '');
$current_wb_form = COption::GetOptionString($id, 'wb_form', '');


//Нужно получить массив с ключами опций модуля
$currentField = array();
foreach ($arOption as $optK => $optV) {
	$currentField[$optK] = COption::GetOptionString($id, $optK);
	//if ((strcmp($optK,"PHONE_WORK")==0) || (strcmp($optK,"PHONE_MOBILE")==0) || (strcmp($optK,"PHONE_HOME")==0) || (strcmp($optK,"PHONE_FAX")==0) || (strcmp($optK,"PHONE_OTHER")==0) || (strcmp($optK,"EMAIL_WORK")==0) || (strcmp($optK,"EMAIL_PERSONAL")==0) || (strcmp($optK,"EMAIL_OTHER")==0) || (strcmp($optK,"IM_ICQ")==0) || (strcmp($optK,"IM_JABBER")==0) || (strcmp($optK,"IM_SKYPE")==0) || (strcmp($optK,"IM_GTALK")==0) || (strcmp($optK,"IM_MSN")==0) || (strcmp($optK,"IM_OTHER")==0) || (strcmp($optK,"NOTE")==0))
		$currentField[$optK] = explode('|', $currentField[$optK]);
}

$amoCRM = new amoCRM(
	$current_domen, // Ваш домен на проекте amoCRM
	$current_email,  // E-mail
	$current_hash, // Пароль или API ключ
	//false, //  Если передаетет пароль, то надо определить false, Если ключ для API то true
	true, //  Если передаетет пароль, то надо определить false, Если ключ для API то true
	true
	);
$auth = $amoCRM->Auth();
if ($auth === TRUE){
	$account_info = $amoCRM->ViewAll();
	if (SITE_CHARSET == "windows-1251") {
		$charset = mb_convert_variables('cp1251', 'UTF-8', $account_info);
	}
	$allStatuses = $amoCRM->parseStatusesCRM($account_info);	//статусы сделок
	$allUsers = $amoCRM->parseUsersCRM($account_info);	//ответственные
	$custom_fields = $amoCRM->parseCustomFields($account_info);	// предустановленые кастомные поля
} else {
	$errorConnect = 0;
}

if ($REQUEST_METHOD == "POST" && strlen($Update.$Apply.$RestoreDefaults.$Connect) > 0 && check_bitrix_sessid()) {
	if (strlen($Connect) > 0) {
		if(!$_REQUEST['DOMEN'])
			$domen = 0;
		if(!$_REQUEST['EMAIL'])
			$email = 0;
		if(!$_REQUEST['HASH'])
			$hash = 0;
		if ($domen == 1  && $email == 1 && $hash == 1) {
			COption::SetOptionString($id, 'domen', $_REQUEST['DOMEN']);
			COption::SetOptionString($id, 'email', $_REQUEST['EMAIL']);
			COption::SetOptionString($id, 'hash', $_REQUEST['HASH']);

			$current_domen = $_REQUEST['DOMEN'];
			$current_email = $_REQUEST['EMAIL'];
			$current_hash = $_REQUEST['HASH'];

			$amoCRM = new amoCRM(
				$current_domen, // Ваш домен на проекте amoCRM
				$current_email,  // E-mail
				$current_hash, // Пароль или API ключ
				//false, //  Если передаетет пароль, то надо определить false, Если ключ для API то true
				true, //  Если передаетет пароль, то надо определить false, Если ключ для API то true
				true
			);
			$auth = $amoCRM->Auth();
			$result = $amoCRM->ViewAll();
			//если ошибка подключения
			if ((strpos($result, 'Error')) !== false) {
				$errorConnect = 0;
				$view = $result;
			} else {
				$errorConnect = 1;
				$isStatus = 1;
				$allStatuses = $amoCRM->parseStatusesCRM($result);
				$allUsers = $amoCRM->parseUsersCRM($result);
				$custom_fields = $amoCRM->parseCustomFields($result);
			}
		}
	} else {
		if (strlen($RestoreDefaults)>0) {
			COption::RemoveOption($id);
		} else {
			COption::SetOptionString($id, 'object', $_REQUEST['OBJECT']);
			COption::SetOptionInt($id, 'status_deal', $_REQUEST['STATUS_DEAL']);
			COption::SetOptionInt($id, 'main_user', $_REQUEST['MAIN_USER']);
			COption::SetOptionString($id, 'tag', $_REQUEST['TAG']);
			COption::SetOptionString($id, 'wb_form', $_REQUEST['NAME_WB_FORM']);
			COption::SetOptionString($id, 'custom_fields', json_encode($custom_fields));

			foreach ($arOption as $optK => $optV) {
				COption::RemoveOption($id, $optK);
			}

			foreach ($_REQUEST['sel'] as $reqK => $reqV) {
				if (strcmp($reqV, "PERSON_NAME") == 0)
					$reqPN.="|".$reqK;
				elseif (strcmp($reqV, "PERSON_SECOND_NAME") == 0)
					$reqSN.="|".$reqK;
				elseif (strcmp($reqV, "PERSON_LAST_NAME") == 0)
					$reqLN.="|".$reqK;
				elseif (strcmp($reqV, "PERSON_FULL_NAME") == 0)
					$reqFN.="|".$reqK;
				elseif (strcmp($reqV, "POSITION") == 0)
					$reqPOS.="|".$reqK;
				elseif (strcmp($reqV, "COMPANY_NAME") == 0)
					$reqCN.="|".$reqK;
				elseif (strcmp($reqV, "COMPANY_WEB") == 0)
					$reqCW.="|".$reqK;
				elseif (strcmp($reqV, "COMPANY_ADDRESS") == 0)
					$reqCA.="|".$reqK;

				elseif (strcmp($reqV, "PHONE_WORK") == 0)
					$reqPW.="|".$reqK;
				elseif (strcmp($reqV, "PHONE_MOBILE") == 0)
					$reqPM.="|".$reqK;
				elseif (strcmp($reqV, "PHONE_HOME") == 0)
					$reqPH.="|".$reqK;
				elseif (strcmp($reqV, "PHONE_FAX") == 0)
					$reqPF.="|".$reqK;
				elseif (strcmp($reqV, "PHONE_OTHER") == 0)
					$reqPO.="|".$reqK;
				elseif (strcmp($reqV, "EMAIL_WORK") == 0)
					$reqEW.="|".$reqK;
				elseif (strcmp($reqV, "EMAIL_PERSONAL") == 0)
					$reqEP.="|".$reqK;
				elseif (strcmp($reqV, "EMAIL_OTHER") == 0)
					$reqEO.="|".$reqK;
				elseif (strcmp($reqV, "IM_ICQ") == 0)
					$reqII.="|".$reqK;
				elseif (strcmp($reqV, "IM_JABBER") == 0)
					$reqIJ.="|".$reqK;
				elseif (strcmp($reqV, "IM_SKYPE") == 0)
					$reqIS.="|".$reqK;
				elseif (strcmp($reqV, "IM_GTALK") == 0)
					$reqIG.="|".$reqK;
				elseif (strcmp($reqV, "IM_MSN") == 0)
					$reqIM.="|".$reqK;
				elseif (strcmp($reqV, "IM_OTHER") == 0)
					$reqIO.="|".$reqK;
				elseif (strcmp($reqV, "NOTE") == 0)
					$reqN.="|".$reqK;
			}

			if (!empty($reqPN))
				COption::SetOptionString($id, "PERSON_NAME", $reqPN);
			if (!empty($reqSN))
				COption::SetOptionString($id, "PERSON_SECOND_NAME", $reqSN);
			if (!empty($reqLN))
				COption::SetOptionString($id, "PERSON_LAST_NAME", $reqLN);
			if (!empty($reqFN))
				COption::SetOptionString($id, "PERSON_FULL_NAME", $reqFN);
			if (!empty($reqPOS))
				COption::SetOptionString($id, "POSITION", $reqPOS);
			if (!empty($reqCN))
				COption::SetOptionString($id, "COMPANY_NAME", $reqCN);
			if (!empty($reqCW))
				COption::SetOptionString($id, "COMPANY_WEB", $reqCW);
			if (!empty($reqCA))
				COption::SetOptionString($id, "COMPANY_ADDRESS", $reqCA);

			if (!empty($reqPW))
				COption::SetOptionString($id, "PHONE_WORK", $reqPW);
			if (!empty($reqPM))
				COption::SetOptionString($id, "PHONE_MOBILE", $reqPM);
			if (!empty($reqPH))
				COption::SetOptionString($id, "PHONE_HOME", $reqPH);
			if (!empty($reqPF))
				COption::SetOptionString($id, "PHONE_FAX", $reqPF);
			if (!empty($reqPO))
				COption::SetOptionString($id, "PHONE_OTHER", $reqPO);
			if (!empty($reqEW))
				COption::SetOptionString($id, "EMAIL_WORK", $reqEW);
			if (!empty($reqEP))
				COption::SetOptionString($id, "EMAIL_PERSONAL", $reqEP);
			if (!empty($reqEO))
				COption::SetOptionString($id, "EMAIL_OTHER", $reqEO);
			if (!empty($reqII))
				COption::SetOptionString($id, "IM_ICQ", $reqII);
			if (!empty($reqIJ))
				COption::SetOptionString($id, "IM_JABBER", $reqIJ);
			if (!empty($reqIS))
				COption::SetOptionString($id, "IM_SKYPE", $reqIS);
			if (!empty($reqIG))
				COption::SetOptionString($id, "IM_GTALK", $reqIG);
			if (!empty($reqIM))
				COption::SetOptionString($id, "IM_MSN", $reqIM);
			if (!empty($reqIO))
				COption::SetOptionString($id, "IM_OTHER", $reqIO);
			if (!empty($reqN))
				COption::SetOptionString($id, "NOTE", $reqN);

		}
		if (strlen($Update) > 0 && strlen($_REQUEST["back_url_settings"]) > 0) {
			LocalRedirect($_REQUEST["back_url_settings"]);
		} else {
			LocalRedirect($APPLICATION->GetCurPage()."?mid=".urlencode($mid)."&lang=".urlencode(LANGUAGE_ID)."&back_url_settings=".urlencode($_REQUEST["back_url_settings"])."&".$tabControl->ActiveTabParam());
		}
	}
}

$tabControl->Begin();
?>

<form method="post" name="intr_opt_form" action="<?echo $APPLICATION->GetCurPage()?>?mid=<?=urlencode($mid)?>&amp;lang=<?echo LANGUAGE_ID?>">
<?=bitrix_sessid_post();?>
<?$tabControl->BeginNextTab();?>
	<tr class="tr-logo">
		<td colspan="2">
			<div class="logo_wrapper">
				<div class="logo">
					<a target="_blank" href="http://www.amocrm.ru/"><img src="http://www.amocrm.ru/design/images/logo.png" width="172" height="35" alt="amoCRM"></a>
				</div>
				<div class="logo_text"><?=GetMessage("AMOCRM_DESCRIPTION")?></div>
			</div>
		</td>
	</tr>
	<tr class="heading" <?if (!empty($allStatuses)):?> style="display:none;" <?endif;?>>
		<td colspan="2"  id="error"><?=GetMessage("AMOCRM_PODKLUCHENIE")?></td>
	</tr>
	<tr <?if (!empty($allStatuses)):?> style="display:none;" <?endif;?>>
		<td width="50%"><label><?echo GetMessage('AMOCRM_DOMEN')?>:</label></td>
		<td id="domen" width="50%"><input type="text" id="input-api" size="40" onchange="changeDomen();" name="DOMEN" value="<?= htmlspecialchars($current_domen) ?>"></td>
	</tr>
	<tr <?if (!empty($allStatuses)):?> style="display:none;" <?endif;?>>
		<td  width="50%"><label><?echo GetMessage('AMOCRM_EMAIL')?>:</label></td>
		<td id="email" width="50%"><input type="text"  size="40" name="EMAIL" value="<?= htmlspecialchars($current_email) ?>"></td>
	</tr>
	<tr <?if (!empty($allStatuses)):?> style="display:none;" <?endif;?>>
		<td width="50%"><label><?echo GetMessage('AMOCRM_HASH')?>:</label></td>
		<td id="hash"  width="50%">
			<input type="password"  size="40" name="HASH" value="<?= htmlspecialchars($current_hash) ?>">
			&nbsp;&nbsp;&nbsp;&nbsp;
			<a id="api" target='_blank' href="#"><?echo GetMessage('AMOCRM_HREF_HASH')?>
		</td>
	</tr>
	<tr <?if (!empty($allStatuses)):?> style="display:none;" <?endif;?>>
				<td colspan="2" style="text-align:center;"><input  <?if (!empty($allStatuses)):?> disabled <?endif;?> type="submit" name="Connect" value="<?=GetMessage('AMOCRM_CONNECT')?>" ></td>
	</tr>
	<tr class="heading" <?if (empty($allStatuses)):?> style="display:none;" <?endif;?>>
				<td colspan="2"  id="error"><?=GetMessage("AMOCRM_SETTING")?></td>
	</tr>
	<tr <?if (empty($allStatuses)):?> style="display:none;" <?endif;?>>
		<td width="50%"><label><?echo GetMessage('AMOCRM_OBJECT')?>:</label></td>
		<td width="50%">
			<select name="OBJECT" onchange="changeObjectForm(this.form)">
				<option value="contact" <?if($current_object=='contact'):?> selected <?endif;?> ><?=GetMessage("AMOCRM_OBJECT_CONTACT")?></option>
				<option value="deal" <?if($current_object=='deal'):?> selected <?endif;?>><?=GetMessage("AMOCRM_OBJECT_DEAL")?></option>
			</select>
		</td>
	</tr>
	<tr <?if (empty($allStatuses)):?> style="display:none;" <?endif;?> id="object" <?if($current_object=='deal'):?> class="tr-active" <?else:?> class="tr-noactive" <?endif?>>
		<td width="50%"><label><?echo GetMessage('AMOCRM_STATUS_DEAL')?>:</label></td>
		<td  width="50%">
		<?if (empty($allStatuses)):?>
			<div><?echo GetMessage('AMOCRM_STATUS_DEAL_NO')?></div>
		<?else:?>
			<select name="STATUS_DEAL">
			<?foreach ($allStatuses as $pipeline):?>
				<optgroup label="<?=$pipeline['name']?>">
					<?foreach ($pipeline['statuses'] as $status):?>
						<option value=<?=$status['id']?> <?if($current_status_deal==$status['id']):?> selected <?endif;?> ><?=$status['name']?></option>
					<?endforeach;?>
				</optgroup>
			<?endforeach;?>
			</select>
		<?endif;?>
		</td>
	</tr>
	<tr <?if (empty($allStatuses)):?> style="display:none;" <?endif;?>>
		<td width="50%"><label><?echo GetMessage('AMOCRM_MAIN_USER')?>:</label></td>
		<td width="50%">
		<?if (empty($allStatuses)):?>
			<div><?echo GetMessage('AMOCRM_MAIN_USER_NO')?></div>
		<?else:?>
			<select name="MAIN_USER">
			<?foreach ($allUsers as $user):?>
				<option value=<?=$user['id']?> <?if($current_main_user==$user['id']):?> selected <?endif;?> ><?=$user['name']?></option>
			<?endforeach;?>
			</select>
		<?endif;?>
		</td>
	</tr>
	<tr <?if (empty($allStatuses)):?> style="display:none;" <?endif;?>>
		<td width="50%"><label><?echo GetMessage('AMOCRM_TAG')?>:</label></td>
		<td id="email" v width="50%"><input type="text"  size="40" name="TAG" value="<?= htmlspecialchars($current_tag) ?>"></td>
	</tr>
	<tr class="heading" <?if (empty($allStatuses)):?> style="display:none;" <?endif;?>>
		<td colspan="2"  id="error"><?=GetMessage("AMOCRM_FIELD")?></td>
	</tr>
	<tr <?if (empty($allStatuses)):?> style="display:none;" <?endif;?>>
		<td width="50%"><label><?echo GetMessage('AMOCRM_WEB_FORM')?>:</label></td>
		<td width="50%">
		<?$res=$CRM->BuildListWebForm();
		$field=CQSoftAmoCRM::BuildListParamsForm();?>
			<select name="NAME_WB_FORM" id ="wb_form" onchange="changeNameForm(this.form)">
				<option value=-1000><?echo GetMessage('AMOCRM_OPTION_SELECT_FORM')?></option>
			<?foreach ($res as $key=>$val):?>
				<option value='<?=$key?>'<?if($current_wb_form==$key):?> selected <?endif;?> ><?=$val?></option>
			<?endforeach;?>
			</select>
		</td>
	</tr>
	<?foreach($res as $key=>$val):?>
	<tr id="form_<?=$key?>" <?if (empty($allStatuses)):?> style="display:none;" <?endif;?>>
		<td colspan="2">
			<div class="noactive">
				<table>
					<?foreach($field[$key] as $k=>$v):?>
					<tr>
						<td width=50% class="field-name">
							<!--<input type="hidden" name="hid_<?=$k?>">--><label><?=$v?>:</label>
							</td>
						<td width=50% class="field-value">

							<select name="sel[<?=$k?>]" id="<?=$v?>">
							<?foreach($arOption as $opK => $opV):?>
									<option value="<?=$opK?>" <?for ($g=0;$g<count($currentField[$opK]);$g++){ if($currentField[$opK][$g]==$k):?> selected <?endif;}?> ><?=$opV?></option>
							<?endforeach;?>
							</select>

						</td>
					</tr>
					<?endforeach;?>
				</table>
			</div>
		</td>
	</tr>
	<?endforeach;?>




<?$tabControl->Buttons();?>
	<input type="submit" name="Update" value="<?=GetMessage("MAIN_SAVE")?>" title="<?=GetMessage("MAIN_OPT_SAVE_TITLE")?>" onclick = alert(123)>
	<input type="submit" name="Apply" value="<?=GetMessage("MAIN_APPLY")?>" title="<?=GetMessage("MAIN_OPT_APPLY_TITLE")?>">
	<input type="submit" name="RestoreDefaults" title="<?echo GetMessage("MAIN_HINT_RESTORE_DEFAULTS")?>" OnClick="confirm('<?echo AddSlashes(GetMessage("MAIN_HINT_RESTORE_DEFAULTS_WARNING"))?>')" value="<?echo GetMessage("LOGINZA_RESTORE")?>">
<?$tabControl->End();?>
</form>



<style>
	.logo_wrapper {background:#0581c5;height:56px;margin:0 0 5px;}
	.logo {float:left;margin:10px 15px;}
	.logo a img{border:none;}
	.logo_text {color:#fff;margin:15px 0 0;float:left;}
	table.edit-table .tr-logo td{padding:0;}
	td#hash_comment {padding: 9px 4px 9px 4px;}
	td#hash {vertical-align:top;}
	table.edit-table tr td label{margin: 2px 0 0;display: block;}
	td div {color:black;}
	select {}
	div.noactive, .tr-noactive {display:none;height:0;}
	.tr-active {display:''}
	div.active table {width: 100%;}
	div.active table {color: #646465;text-align: right;}
	div.active td {color: #646465;text-align: right;}
	td.active + td.active {text-align: left;}
	div.active td.active {padding:0 4px;}
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
	window.onload = function()
	{
		var s = document.getElementById('wb_form'),
		ind = s.options[s.selectedIndex].value,
		tr = document.getElementById('form_'+ind),
		elem = tr.getElementsByTagName('*');
		for (var j=0;j<elem.length;j++)
		{
			if(elem[j].className)
				elem[j].className="active";
		}
		var input = document.getElementById('input-api');
		var a = document.getElementById('api');
		a.href="https://"+input.value+".amocrm.ru/settings/profile/";
	}

	if (<?=$domen?>==0)
	{
		var domen = document.getElementById('domen');
		var inDomen = document.createElement('div');
		inDomen.innerHTML='<?=GetMessage('AMOCRM_DOMEN_NO')?>';
		domen.appendChild(inDomen);
	}
	if (<?=$email?>==0)
	{
		var email = document.getElementById('email');
		var inEmail = document.createElement('div');
		inEmail.innerHTML='<?=GetMessage('AMOCRM_EMAIL_NO')?>';
		email.appendChild(inEmail);
	}
	if (<?=$hash?>==0)
	{
		var hash = document.getElementById('hash');
		var inHash = document.createElement('div');
		inHash.innerHTML='<?=GetMessage('AMOCRM_HASH_NO')?>';
		hash.appendChild(inHash);
	}
	if (<?=$errorConnect?>==0)
	{
		var connect = document.getElementById('error');
		var inConnect = document.createElement('div');
		inConnect.innerHTML='<?=$view?>';
		connect.appendChild(inConnect);
	}

	function changeDomen(input)
	{
		var input = document.getElementById('input-api');
		var a=document.getElementById('api');
		a.href="https://"+input.value+".amocrm.ru/settings/profile/";
	}

	function changeObjectForm(form)
	{
		obj=form.OBJECT.options[form.OBJECT.selectedIndex].value;
		tr=document.getElementById("object");
		if (obj=="contact")
			//alert("contact");
		{
			tr.className="tr-noactive";
		}
		if (obj=="deal")
			tr.className="tr-active";

	}

	function changeNameForm(form)
	{
		//alert('ok');
		num = form.NAME_WB_FORM.selectedIndex;
		count=form.NAME_WB_FORM.length;
		for (var i=0; i<count;i++)
		{
			val = parseInt(form.NAME_WB_FORM.options[i].value);
			if (val!=-1000)
			{
				tr=document.getElementById('form_'+val);
				elem = tr.getElementsByTagName('*');
				for (var j=0;j<elem.length;j++)
				{
					if(elem[j].className)
					{
						if (i != num)
						elem[j].className="noactive";
						else
							elem[j].className="active";
					}
				}
			}
		}
	}
</script>
