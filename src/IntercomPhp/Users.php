<?php

namespace IntercomPhp;

class Users extends Base{
	
	public function addUser(){
		
		$response = \GuzzleHttp\post('https://api.intercom.io/users',[
			'header'=>'Authorization: Basic pi3243fa:da39a3ee5e6b4b0d3255bfef95601890afd80709'
		]);
		
		var_dump($response);
		
	}
	
	
}
