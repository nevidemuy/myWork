<?php

class Amo {
	
	public $subdomain = 'testra';
	public $user_id = '176348';
	//public $user_id = '1431343';
	public $data = array('request'=>array('leads' => array() ));
	public $task = '';
	
	function login(){
		$user=array(
			'USER_LOGIN'=>'almazjoe@gmail.com', #Ваш логин (электронная почта) 164c3a305b536e0161bae002ec99d750
			'USER_HASH'=>'164c3a305b536e0161bae002ec99d750' #305253ceaae7022b0cfa5daa36a6b5de
		);
		$this->getData('auth.php?type=json', $user);	
	}
	
	function getAccaunt(){
		$this->login();
		return $this->getData('v2/json/accounts/current');
	}
	
	function send(){
		$this->login();
		$res = $this->getData('v2/json/leads/set', $this->data);
		if($this->task == 'add') $res->leadId = $res->response->leads->add[0]->id;
		return $res;
	}
	
	function setField($id, $value){
		if(!isset($this->data['request']['leads'][$this->task][0]['custom_fields']))
					$this->data['request']['leads'][$this->task][0]['custom_fields'] = array();
		$this->data['request']['leads'][$this->task][0]['custom_fields'][] = array(
			'id'=>$id,
			'values'=>array(
				array(
					'value'=> $value
				)
			)
		);
	}
	
	function add($data){
		return $this->setTask('add', $data);
	}
	
	function update($data){
		$data['last_modified']=time();
		return $this->setTask('update', $data);
	}
	
	function setTask($task, $data){
		$this->task = $task;
		$this->data['request']['leads'][$task] = array(
			array(
				'name'=> $data['name'],
				'status_id'=>$data['status_id'],
				'responsible_user_id'=>$this->user_id,
			)
		);
		if(isset($data['id'])) $this->data['request']['leads'][$task][0]['id'] = $data['id'];
		if(isset($data['last_modified'])) $this->data['request']['leads'][$task][0]['last_modified'] = $data['last_modified'];
		return $this;
	}
	
	function setUserId($id){
		$this->user_id = $id;
		return $this;
	}
	
	function setDomain($domain){
		$this->subdomain = $domain;
		return $this;
	}
	

	
	function getData($url, $post = ''){ 
		$url = 'https://'.$this->subdomain.'.amocrm.ru/private/api/' . $url;
			$curl=curl_init();
		curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
		curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');
		curl_setopt($curl,CURLOPT_URL,$url);
		if($post){
			curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');
			curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($post));
		}
		curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
		curl_setopt($curl,CURLOPT_HEADER,false);
		curl_setopt($curl,CURLOPT_COOKIEFILE,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
		curl_setopt($curl,CURLOPT_COOKIEJAR,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
		curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
		curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
		$out=curl_exec($curl);
		return json_decode($out);
	}
	
}