<?php

namespace IntercomPhp;

class Users extends Base {

	
	public function getUsers () {

		$response = $this->getClient()->get( '/users' );

		return $response->json();
	}

	public function addUser( \IntercomPhp\Domain\User $user ){
		
		
	}
	 
}
