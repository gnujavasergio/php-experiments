<?php

class Developer {
	public $username;
	public $fistName;
	public $lastName;
	public $phone;
	public $isPro;
	public $age;

	/**
	 * @param $username
	 * @param $fistName
	 * @param $lastName
	 * @param $phone
	 * @param $isPro
	 * @param $age
	 */
	public function __construct($username, $fistName, $lastName, $phone = "", $isPro = false, $age = 0) {
		$this->username = $username;
		$this->fistName = $fistName;
		$this->lastName = $lastName;
		$this->phone = $phone;
		$this->isPro = $isPro;
		$this->age = $age;
	}


	public function fullName() {
		return "$this->fistName $this->lastName";
	}
}

$devSergio = new Developer('gnujavasergio', 'Sergio Antonio', 'Ochoa Martinez');
var_dump($devSergio->fullName());
var_dump($devSergio);
