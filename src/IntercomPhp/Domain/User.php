<?php

namespace IntercomPhp\Domain;

class User {
	
	private $id;
	private $email;
	private $name;
	private $createdAt;
	private $remoteCreatedAt;
	private $newSession = false;
	
	public function __construct () {
	}
	
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

	public function getCreatedAt () {
		return $this->createdAt;
	}

	public function setCreatedAt ( $createdAt ) {
		$this->createdAt = $createdAt;
	}

	
	public function getRemoteCreatedAt () {
		return $this->remoteCreatedAt;
	}

	public function setRemoteCreatedAt ( $remoteCreatedAt ) {
		$this->remoteCreatedAt = $remoteCreatedAt;
	}
	 
	public function isNewSession () {
		return $this->newSession;
	}

	public function setNewSession ( $newSession ) {
		$this->newSession = $newSession;
	}
	

}
