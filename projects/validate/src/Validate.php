<?php

namespace App;

class Validate {

	public static function validateEmail($email) {
		return (bool)filter_var($email, FILTER_VALIDATE_EMAIL);
	}

	public static function validateUrl($url) {
		return (bool)filter_var($url, FILTER_VALIDATE_URL);
	}

	public static function validatePassword($password) {
		return (bool)preg_match('/^[0-9]{6,9}$/', $password);
	}
}
