<?php

namespace IntercomPhp;

class Users extends Base {

	public function getUsers () {

		$response = $this->getClient()->get( '/users' );

		return $response->json();
	}

	public function addUser ( \IntercomPhp\Domain\User $user ) {

		$data = [
			"name" => $user->getName(),
			"email" => $user->getEmail(),
			"user_id" => $user->getId(),
			"created_at" => $user->getCreatedAt(),
			"last_seen_ip" => $this->getRequestIp(),
			"new_session" => $user->isNewSession()
		];

		$this->getClient()->post( '/users', ['json' => $data] );
	}
	
	

}
