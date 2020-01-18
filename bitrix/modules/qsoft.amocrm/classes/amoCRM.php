<?php 

class amoCRM {
	
	private $login;		// user login
	private $hash;	    // Are we using token?
	private $pass;		// User token or password
	private $urlbase;   // Domain
	private $uagent;	// User agent
	private $ssl;		// Are we using https?
	private $subdomain; // Account



	function amoCRM($subdomain, $login, $pass, $hash = false, $ssl = false, $uagent = "Bitrix: amoCRM-API-client/1.0") {
		
		$this->ssl = $ssl;
		$this->login = $login;
		$this->hash = $hash;
		$this->pass = $pass;
		$this->subdomain = $subdomain;
		$this->urlbase = "amocrm.ru"; // default domain
		$this->uagent = $uagent . "({$login})";
	}


	function SetDomain($host) {
		if(preg_match('/^(\w+\.)+(\w{3})$/',$host)){
			$this->urlbase = $host;
		}
	}

	function Auth(){
		$user = array(
			'USER_LOGIN' => $this->login,
			'USER_HASH' => $this->pass
		);
		$url = '/private/api/auth.php?type=json';
		$result = $this->Init($user, $url);
		if (is_array($result) && $result['response']['auth'] == TRUE) {
			return TRUE;
		} else {
			return $result;
		}
	}

	private function Init($data, $url, $sub = true, $parse = true) {
		$proto = ($this->ssl==true)?'https':'http';
		$sub = $sub == true ? $this->subdomain . '.' : '';
		$urlbase = $proto . '://' . $sub . $this->urlbase;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERAGENT, $this->uagent);
		curl_setopt($ch, CURLOPT_URL, $urlbase . $url);
		if (!empty($data)){
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
		}
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_COOKIEFILE, dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
		curl_setopt($ch, CURLOPT_COOKIEJAR, dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
		if($this->ssl) {
			curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
			curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
		}
		$out = curl_exec ($ch);
		$code = curl_getinfo ($ch, CURLINFO_HTTP_CODE);

		switch ($code){
			case '301': $cDescr = GetMessage("amoCRM_CLASS_AMOCRM_301"); break;
			case '400': $cDescr = GetMessage("amoCRM_CLASS_AMOCRM_400"); break;
			case '401': $cDescr = GetMessage("amoCRM_CLASS_AMOCRM_401"); break;
			case '403': $cDescr = GetMessage("amoCRM_CLASS_AMOCRM_403"); break;
			case '404': $cDescr = GetMessage("amoCRM_CLASS_AMOCRM_404"); break;
			case '500': $cDescr = GetMessage("amoCRM_CLASS_AMOCRM_500"); break;
			case '502': $cDescr = GetMessage("amoCRM_CLASS_AMOCRM_502"); break;
			case '503': $cDescr = GetMessage("amoCRM_CLASS_AMOCRM_503"); break;
			default: $cDescr = GetMessage("amoCRM_CLASS_AMOCRM_DEFAULT");
		}

		if($code != 200) {
			return 'Error: '.$code.' '.$cDescr;
		} else {
			if($parse) {
				$out = json_decode($out, TRUE);
			}
			return $out;
		}
	}

	function PushDeal($deal) {
		$data['request']['leads']['add'] = array($deal);
		$url = "/private/api/v2/json/leads/set/";
		$out = $this->Init($data, $url);
		if (isset($out['response']['leads']['add'][0]['id'])){
			$deal_id = $out['response']['leads']['add'][0]['id'];
			return $deal_id;
		}
		return $out;
	}
	
	function PushContact($contact) {
		$data['request']['contacts']['add'] = array($contact);
		$url = "/private/api/v2/json/contacts/set/";
		$out = $this->Init($data, $url);
		$contact_id = NULL;
		if (isset($out['response']['contacts']['add'][0]['id'])){
			$contact_id = $out['response']['contacts']['add'][0]['id'];
		}
		return $contact_id;
	}

	function PushCompany($company) {
		$data['request']['contacts']['add'] = array($company);
		$url = "/private/api/v2/json/company/set/";
		$out = $this->Init($data, $url);
		$company_id = NULL;
		if (isset($out['response']['contacts']['add'][0]['id'])){
			$company_id = $out['response']['contacts']['add'][0]['id'];
		}
		return $company_id;
	}
	
	function PushNote($text, $id, $type) {
		$data = array(
			'request' => array(
				'notes' => array(
					'add' => array(
						array(
							'element_id' => $id,
							'element_type' => $type,
							'note_type' => 4,
							'text' => $text
						)
					)
				)
			)
		);
		$url = "/private/api/v2/json/notes/set";
		$this->Init($data, $url);
	}
	
	function PushTask($request) {
		$data = $request;
		$data['ACTION'] = 'ADD_TASK';
		$url = "/private/api/v2/json/task/set";
		return $this->Init($data, $url, true, false);
	}

	function ViewAll() {
		$url = '/private/api/v2/json/accounts/current';
		return $this->Init($data = NULL, $url, TRUE, TRUE);
	}
	
	function parseStatusesCRM(array $account_info) {
		$arrStatuses = array();
		$arrPipelines = array();
		$pipelines = $account_info['response']['account']['pipelines'];
		foreach ($pipelines as $pipeline) {
			$arr['id'] = intval($pipeline['id']);
			$arr['name'] = strval($pipeline['label']);
			foreach ($pipeline['statuses'] as $status) {
				$arr['statuses']['id'] = intval($status['id']);
				$arr['statuses']['name'] = strval($status['name']);
				$arr['statuses']['color'] = strval($status['color']);
				$arrStatuses[] = $arr['statuses'];
			}
			$arr['statuses'] = $arrStatuses;
			unset($arrStatuses);
			$arrPipelines[]=$arr;
			unset($arr);
		}
		return $arrPipelines;
	}

	function parseUsersCRM($account_info) {
		$arrUsers = array();
		$users = $account_info['response']['account']['users'];
		for ($i=0;$i<count($users);$i++) {
			$arr["id"]=intval($users[$i]['id']);
			$arr["name"]=strval($users[$i]['name']);
			$arr["email"]=strval($users[$i]['login']);
			$arrUsers[]=$arr;
		}
		return $arrUsers;
	}

	public function parseCustomFields($account_info) {
		$arrFields = array();
		$cf = $account_info['response']['account']['custom_fields'];
		foreach ($cf['contacts'] as $field) {
			if (isset($field['code']) && $field['code'] == 'POSITION') {
				$arrFields['contacts']['POSITION'] = array('id' => $field['id']);
			}
			if (isset($field['code']) && $field['code'] == 'PHONE') {
				$arrFields['contacts']['PHONE'] = array('id' => $field['id']);
			}
			if (isset($field['code']) && $field['code'] == 'EMAIL') {
				$arrFields['contacts']['EMAIL'] = array('id' => $field['id']);
			}
			if (isset($field['code']) && $field['code'] == 'IM') {
				$arrFields['contacts']['IM'] = array('id' => $field['id']);
			}
		}
		foreach ($cf['companies'] as $field) {
			if (isset($field['code']) && $field['code'] == 'WEB') {
				$arrFields['companies']['WEB'] = array('id' => $field['id']);
			}
			if (isset($field['code']) && $field['code'] == 'ADDRESS') {
				$arrFields['companies']['ADDRESS'] = array('id' => $field['id']);
			}
		}
		return $arrFields;
	}
}
