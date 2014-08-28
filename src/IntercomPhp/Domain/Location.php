<?php

namespace IntercomPhp\Domain;

class Location {
	
	
	private $city;
	private $continentCode;
	private $countryCode;
	private $countryName;
	private $latitude;
	private $longitude;
	private $postalCode;
	private $regionName;
	private $timeZone;
	
	public function __construct () {
		;
	}
	
	public function getCity () {
		return $this->city;
	}

	public function getContinentCode () {
		return $this->continentCode;
	}

	public function getCountryCode () {
		return $this->countryCode;
	}

	public function getCountryName () {
		return $this->countryName;
	}

	public function getLatitude () {
		return $this->latitude;
	}

	public function getLongitude () {
		return $this->longitude;
	}

	public function getPostalCode () {
		return $this->postalCode;
	}

	public function getRegionName () {
		return $this->regionName;
	}

	public function getTimeZone () {
		return $this->timeZone;
	}

	public function setCity ( $city ) {
		$this->city = $city;
	}

	public function setContinentCode ( $continentCode ) {
		$this->continentCode = $continentCode;
	}

	public function setCountryCode ( $countryCode ) {
		$this->countryCode = $countryCode;
	}

	public function setCountryName ( $countryName ) {
		$this->countryName = $countryName;
	}

	public function setLatitude ( $latitude ) {
		$this->latitude = $latitude;
	}

	public function setLongitude ( $longitude ) {
		$this->longitude = $longitude;
	}

	public function setPostalCode ( $postalCode ) {
		$this->postalCode = $postalCode;
	}

	public function setRegionName ( $regionName ) {
		$this->regionName = $regionName;
	}

	public function setTimeZone ( $timeZone ) {
		$this->timeZone = $timeZone;
	}


	
}
	