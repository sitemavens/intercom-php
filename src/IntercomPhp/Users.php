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
			"new_session" => $user->isNewSession(),
			'last_request_at' => time(),
			'location_data' => [
				"type" => "location_data",
				"city_name" => $user->getLocation()->getCity(),
				"continent_code" => $user->getLocation()->getContinentCode(),
				"country_code" => $user->getLocation()->getCountryCode(),
				"latitude" => $user->getLocation()->getLatitude(),
				"longitude" => $user->getLocation()->getLongitude(),
				"postal_code" => $user->getLocation()->getPostalCode(),
				"region_name" => $user->getLocation()->getRegionName(),
				"timezone" => $user->getLocation()->getTimeZone()
			]
		];

		$this->getClient()->post( '/users', ['json' => $data] );
	}
	
	

}
