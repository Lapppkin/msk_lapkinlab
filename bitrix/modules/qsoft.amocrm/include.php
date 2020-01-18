<?
IncludeModuleLangFile(__FILE__);
require_once dirname(__FILE__).'/classes/amoCRM.php';

Class CQSoftAmoCRM
{
	static $id = "qsoft.amocrm";

	public static $arOption = array(
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
		'NOTE' => '',
	);

	function BuildListWebForm() {
		CModule::IncludeModule("form");
		$arRes = array();
		$rsForms = CForm::GetList($by = "s_id", $order = "ASC", array(), $is_filtered);
		while ($arForm = $rsForms->Fetch())
		{
			$arRes[$arForm['ID']] = '['.$arForm['ID'].'] '.$arForm['NAME'];
		}
		return $arRes;
	}

	function GetNameWebForm($id) {
		CModule::IncludeModule("form");
		$rsForms = CForm::GetList($by = "s_id", $order = "ASC", array('ID' => $id), $is_filtered);
		if ($arForm = $rsForms->Fetch())
			return $Name = $arForm['NAME'];
	}


	function BuildListParamsForm() {
		CModule::IncludeModule("form");
		$arForm = CQSoftAmoCRM::BuildListWebForm();
		$arField = array();
		foreach ($arForm as $key => $value)
		{
			$rsQuestions = CFormField::GetList($key, "ALL", $by = "id", $order = "desc", array("ACTIVE" => "Y"), $is_filtered);
			while ($arQ = $rsQuestions->Fetch())
			{
				$arField[$arQ['FORM_ID']][$arQ['ID']]=$arQ['TITLE'].' ('.$arQ['SID'].')';
			}
		}
		return $arField;
	}


	function onAfterResultAddCRM($WEB_FORM_ID, $RESULT_ID) {
		$current_domen = COption::GetOptionString(self::$id, 'domen', '');
		$current_email = COption::GetOptionString(self::$id, 'email', '');
		$current_hash = COption::GetOptionString(self::$id, 'hash', '');
		$current_object = COption::GetOptionString(self::$id, 'object', '');
		$current_status_deal = COption::GetOptionInt(self::$id, 'status_deal', '');
		$current_main_user = COption::GetOptionInt(self::$id, 'main_user', '');
		$current_tag = COption::GetOptionString(self::$id, 'tag', '');
		$current_wb_form = COption::GetOptionString(self::$id, 'wb_form', '');
		$custom_fields = COption::GetOptionString(self::$id, 'custom_fields', '');
		$custom_fields = json_decode($custom_fields, TRUE);
		$currentField = array();
		$ar = self::$arOption;
		foreach ($ar as $optK => $optV) {
			$currentField[$optK] = COption::GetOptionString(self::$id, $optK);
		}

		$amoCRM = new amoCRM($current_domen, $current_email, $current_hash, true, true);
		$amoCRM->Auth();
		if (empty($custom_fields)) {
			$account_info = $amoCRM->ViewAll();
			$custom_fields = $amoCRM->parseCustomFields($account_info);	// предустановленые кастомные поля
			COption::SetOptionString(self::$id, 'custom_fields', json_encode($custom_fields));
		}

		if ($WEB_FORM_ID == $current_wb_form) {
			//получаем id поля и их значения
			CForm::GetResultAnswerArray(
				$WEB_FORM_ID,
				$arrColumns,
				$arrAnswers,
				$arrAnswersVarname,
				array("RESULT_ID" => $RESULT_ID)
			);

			$contact = array();
			$note = array();
			if ($current_object == 'deal') {
				$name = GetMessage("AMOCRM_INCLUDE_LEAD_FROM_WEBFORM");
				$name .= self::GetNameWebForm($WEB_FORM_ID);
				$dataDeal = array(
					'name' => $name,
					'status_id' => $current_status_deal,
					'price'	=> '',
					'responsible_user_id' => $current_main_user,
					'tags' => $current_tag,
				);
				$deal_id = $amoCRM->PushDeal($dataDeal);
			} else $deal_id = NULL;

			foreach ($currentField as $keyF => $valF) {
				if ((strcmp($keyF, "PHONE_WORK") == 0) || (strcmp($keyF, "PHONE_MOBILE") == 0) ||
					(strcmp($keyF, "PHONE_HOME") == 0) || (strcmp($keyF, "PHONE_FAX") == 0) ||
					(strcmp($keyF, "PHONE_OTHER") == 0) || (strcmp($keyF, "EMAIL_WORK") == 0) ||
					(strcmp($keyF, "EMAIL_PERSONAL") == 0) || (strcmp($keyF, "EMAIL_OTHER") == 0) ||
					(strcmp($keyF, "IM_ICQ") == 0) || (strcmp($keyF, "IM_JABBER") == 0) ||
					(strcmp($keyF, "IM_SKYPE") == 0) || (strcmp($keyF, "IM_GTALK") == 0) ||
					(strcmp($keyF, "IM_MSN") == 0) || (strcmp($keyF, "IM_OTHER") == 0)) {
					$valF = explode('|',$valF);
					for ($k = 1; $k < count($valF); $k++) {
						foreach ($arrAnswers[$RESULT_ID] as $keyD => $valD)	{
							$index = key($valD);
							foreach ($valD as $index => $v)	{
								if ($valD[$index]['FIELD_ID'] == $valF[$k]) {
									if ($valD[$index]['FIELD_TYPE'] == 'text'  || $valD[$index]['FIELD_TYPE']=='date' ||
										$valD[$index]['FIELD_TYPE'] == 'textarea' || $valD[$index]['FIELD_TYPE']=='email' ||
										$valD[$index]['FIELD_TYPE'] == 'url' || $valD[$index]['FIELD_TYPE'] == 'password') {
										if (!empty($valD[$index]['USER_TEXT']))
											$contact[$keyF][$k]=$valD[$index]['USER_TEXT'];
										else {
											$contact[$keyF][$k]=$valD[$index]['ANSWER_TEXT'];
										}
									}
								elseif($valD[$index]['FIELD_TYPE'] == 'radio' || $valD[$index]['FIELD_TYPE'] == 'dropdown')
									$contact[$keyF][$k] = $valD[$index]['ANSWER_TEXT'];
								elseif($valD[$index]['FIELD_TYPE'] == 'checkbox')
									$contact[$keyF][$k] .= $valD[$index]['ANSWER_TEXT']." ";
								elseif($valD[$index]['FIELD_TYPE'] == 'multiselect')
									$contact[$keyF][$k] .= $valD[$index]['ANSWER_TEXT']." ";
								}
							}
						}
					}
				}
				elseif ((strcmp($keyF, "NOTE") == 0)) {
					$valF = explode('|', $valF);
					for ($k = 1; $k < count($valF); $k++) {
						foreach ($arrAnswers[$RESULT_ID] as $keyD => $valD) {
							foreach ($valD as $index => $v) {
								if ($valD[$index]['FIELD_ID'] == $valF[$k]) {
									if ($valD[$index]['FIELD_TYPE'] == 'text' || $valD[$index]['FIELD_TYPE'] == 'date' ||
										$valD[$index]['FIELD_TYPE'] == 'textarea' || $valD[$index]['FIELD_TYPE'] == 'email' ||
										$valD[$index]['FIELD_TYPE'] == 'url' || $valD[$index]['FIELD_TYPE'] == 'password') {
										if (!empty($valD[$index]['TITLE']))
											$nameNote = $valD[$index]['TITLE'];
										else
											$nameNote = $valD[$index]['VARNAME'];
										if (!empty($valD[$index]['USER_TEXT']))
											$note[$nameNote] .= $valD[$index]['USER_TEXT'];
										elseif(!empty($valD[$index]['ANSWER_TEXT'])) {
											$note[$nameNote] .= $valD[$index]['ANSWER_TEXT']."\n";
										}
									}
									elseif($valD[$index]['FIELD_TYPE'] == 'radio' || $valD[$index]['FIELD_TYPE'] == 'dropdown')
										$note[$nameNote] .= $valD[$index]['ANSWER_TEXT'];
									elseif($valD[$index]['FIELD_TYPE'] == 'checkbox')
										$note[$nameNote] .= $valD[$index]['ANSWER_TEXT']." ";
									elseif($valD[$index]['FIELD_TYPE'] == 'multiselect')
										$note[$nameNote] .= $valD[$index]['ANSWER_TEXT']." ";
								}
							}
						}
					}
				} else {
					$valF = explode('|', $valF);
					for ($k = 1; $k < count($valF); $k++) {
						foreach ($arrAnswers[$RESULT_ID] as $keyD => $valD) {
							foreach ($valD as $index => $v) {
								if ($valD[$index]['FIELD_ID'] == $valF[$k]) {
									if ($valD[$index]['FIELD_TYPE'] == 'text' || $valD[$index]['FIELD_TYPE'] == 'date' ||
										$valD[$index]['FIELD_TYPE'] == 'textarea' || $valD[$index]['FIELD_TYPE'] == 'email' ||
										$valD[$index]['FIELD_TYPE'] == 'url' || $valD[$index]['FIELD_TYPE'] == 'password') {
										if (!empty($valD[$index]['USER_TEXT']))
											$contact[$keyF] = $valD[$index]['USER_TEXT'];
										else
											$contact[$keyF] = $valD[$index]['ANSWER_TEXT'];
									}
								elseif($valD[$index]['FIELD_TYPE'] == 'radio' || $valD[$index]['FIELD_TYPE'] == 'dropdown')
									$contact[$keyF] = $valD[$index]['ANSWER_TEXT'];
								elseif($valD[$index]['FIELD_TYPE'] == 'checkbox')
									$contact[$keyF] .= $valD[$index]['ANSWER_TEXT']." ";
								elseif($valD[$index]['FIELD_TYPE'] == 'multiselect')
									$contact[$keyF] .= $valD[$index]['ANSWER_TEXT']." ";
								}
							}
						}
					}
				}
			}

			$dataContact = array();
			$dataContact['contact_data'] = array();
			$fullName = '';	$phones = array(); $emails = array(); $ims = array();
			foreach ($contact as $keyC => $valC) {
				if ($keyC == 'PERSON_NAME') {
					$dataContact['name'] = $valC;
					$fullName .= $valC;
				}
				if ($keyC == 'PERSON_SECOND_NAME') {
					$dataContact['name'] = $valC;
					$fullName .= " $valC";
				}
				if ($keyC == 'PERSON_LAST_NAME') {
					$dataContact['name'] = $valC;
					$fullName .= " $valC";
				}
				if ($keyC == 'PERSON_FULL_NAME') {
					$dataContact['name'] = $valC;
				}
				if ($keyC == 'POSITION') {
					$dataContact['custom_fields'][] = array('id' => $custom_fields['POSITION']['id'], 'values' => array(array('value' => $valC)));
				}
				if ($keyC == 'PHONE_WORK' || $keyC == 'PHONE_MOBILE' || $keyC == 'PHONE_HOME' || $keyC == 'PHONE_FAX' || $keyC == 'PHONE_OTHER') {
					if ($keyC == 'PHONE_WORK') $enum = 'WORK';
					elseif ($keyC == 'PHONE_MOBILE') $enum = 'MOB';
					elseif ($keyC == 'PHONE_HOME') $enum = 'HOME';
					elseif ($keyC == 'PHONE_FAX') $enum = 'FAX';
					else $enum = 'OTHER';
					foreach ($valC as $value) {
						$phones[] = array('value' => $value, 'enum' => $enum);
					}
				}
				if ($keyC == 'EMAIL_WORK' || $keyC == 'EMAIL_PERSONAL' || $keyC == 'EMAIL_OTHER') {
					if ($keyC == 'EMAIL_WORK') $enum = 'WORK';
					elseif ($keyC == 'EMAIL_PERSONAL') $enum = 'PRIV';
					else $enum = 'OTHER';
					foreach ($valC as $value) {
						$emails[] = array('value' => $value, 'enum' => $enum);
					}
				}
				if ($keyC == 'IM_ICQ' || $keyC == 'IM_JABBER' || $keyC == 'IM_SKYPE' || $keyC == 'IM_GTALK' || $keyC == 'IM_MSN' || $keyC == 'IM_OTHER') {
					if ($keyC == 'IM_ICQ') $enum = 'ICQ';
					elseif ($keyC == 'IM_JABBER') $enum = 'JABBER';
					elseif ($keyC == 'IM_SKYPE') $enum = 'SKYPE';
					elseif ($keyC == 'IM_GTALK') $enum = 'GTALK';
					elseif ($keyC == 'IM_MSN') $enum = 'MSN';
					else $enum = 'OTHER';
					foreach ($valC as $value) {
						$ims[] = array('value' => $value, 'enum' => $enum);
					}
				}
				if ($keyC == 'COMPANY_NAME') {
					$dataCompany['name'] = $valC;
				}
				if ($keyC == 'COMPANY_WEB')	{
					$dataCompany['custom_fields'][] = array('id' => $custom_fields['companies']['WEB']['id'], 'values' => array(array('value' => $valC)));
				}
				if ($keyC == 'COMPANY_ADDRESS') {
					$dataCompany['custom_fields'][] = array('id' => $custom_fields['companies']['ADDRESS']['id'], 'values' => array(array('value' => htmlspecialcharsEx($valC))));
				}
			}
			if (!empty($phones)) {
				$dataContact['custom_fields'][] = array('id' => $custom_fields['contacts']['PHONE']['id'], 'values' => $phones);
			}
			if (!empty($emails)) {
				$dataContact['custom_fields'][] = array('id' => $custom_fields['contacts']['EMAIL']['id'], 'values' => $emails);
			}
			if (!empty($ims)) {
				$dataContact['custom_fields'][] = array('id' => $custom_fields['contacts']['IM']['id'], 'values' => $ims);
			}
			if (!empty($fullName))
				$dataContact['name'] = $fullName;
			if (empty($dataContact['name']))
				$dataContact['name'] = GetMessage("amoCRM_INCLUDE_DEF_CONTACT_NAME");
			$dataContact['responsible_user_id'] = $current_main_user;
			$dataContact['tags'] = $current_tag;
			if (isset($deal_id)){
				$dataContact['linked_leads_id'] = array($deal_id);
			}
			if (!empty($dataCompany)) {
				if (empty($dataCompany['name'])) {
					$dataCompany['name'] = GetMessage("amoCRM_INCLUDE_DEF_CONTACT_NAME");
				}
				$company_id = $amoCRM->PushCompany($dataCompany);
				$dataContact['linked_company_id'] = $company_id;
			}
			unset($dataContact['contact_data']);
			$contacts_id = $amoCRM->PushContact($dataContact);
			if (!empty($note)) {
				$note_text = '';
				foreach ($note as $keyN => $valN) {
					$note_text .= $keyN.": ".$valN.PHP_EOL;
				}
				if ($current_object == 'deal') {
					$id = $deal_id;
					$type = 2;
				} else {
					$id = $contacts_id;
					$type = 1;
				}
				$amoCRM->PushNote($note_text, $id, $type);
			}
		}
	}
}
