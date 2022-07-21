<?php

/**
 * Class Student
 * @author Sergio Ochoa <gnu.java.sergio@gmail.com>
 */
class Student {

	// Nombre
	private $firstName;
	# Apellido
	private $lastName;

	/**
	 * Student constructor.
	 * @param $firstName
	 * @param $lastName
	 */
	public function __construct($firstName, $lastName) {
		/*
		 * Asignacion al atributo de la clase firstName
		 */
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}
}

$sergio = new Student("Sergio Antonio", "Ochoa Martinez");

