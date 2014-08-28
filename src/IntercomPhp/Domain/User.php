<?php

namespace IntercomPhp\Domain;

class User {
	
	private $id;
	private $email;
	private $name;
	
	public function getId () {
		return $this->id;
	}

	public function getEmail () {
		return $this->email;
	}

	public function getName () {
		return $this->name;
	}

	public function setId ( $id ) {
		$this->id = $id;
	}

	public function setEmail ( $email ) {
		$this->email = $email;
	}

	public function setName ( $name ) {
		$this->name = $name;
	}


	public function toArray(){
		 $array = (array) $this;
		 
		 return $array;
	}
}
