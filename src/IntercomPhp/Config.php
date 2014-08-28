<?php

namespace IntercomPhp;

class Config {

	private static $ApiKey = "";
	private static $AppId = "";

	public static function init ( $appId, $apiKey ) {

		self::$ApiKey = $apiKey;
		self::$AppId = $appId;
		
	}

	public static function getConf () {

		if ( !self::$ApiKey || !self::$AppId ) {
			throw new \Exception( "Api Key and App ID must be set in order to use the api" );
		}

		$conf = new \stdClass();
		$conf->apiKey = self::$ApiKey;
		$conf->appId = self::$AppId;

		return $conf;
	}

}
