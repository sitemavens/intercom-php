<?php

namespace IntercomPhp;

class Base {

	private $client = null;
	private $baseUrl = "https://api.intercom.io";

	public function __construct () {
		
	}

	protected function getClient () {

		if ( !$this->client ) {

			$conf = \IntercomPhp\Config::getConf();

			// Create a client with a base URL
			$this->client = new \GuzzleHttp\Client( ['base_url' => $this->baseUrl,
				'defaults' => [
					'auth' => [$conf->appId, $conf->apiKey ],
					'headers' => [
						'Accept' => 'application/json'
					]
				] ] );
		}

		return $this->client;
	}

	protected function getRequestIp () {
		$ip = "";
		
		if ( !empty( $_SERVER[ 'HTTP_CLIENT_IP' ] ) ) {
			$ip = $_SERVER[ 'HTTP_CLIENT_IP' ];
		} elseif ( !empty( $_SERVER[ 'HTTP_X_FORWARDED_FOR' ] ) ) {
			$ip = $_SERVER[ 'HTTP_X_FORWARDED_FOR' ];
		} else {
			$ip = $_SERVER[ 'REMOTE_ADDR' ];
		}
		
		return $ip;
	}

}
