<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase {

	public function testEmail() {
		$email = Validate::validateEmail('gnu.java.sergio@gmail.com');
		$this->assertTrue($email);

		$email = Validate::validateEmail('gnu.java.sergio@@gmail.com');
		$this->assertFalse($email);
	}

	public function testUrl() {
		$url = Validate::validateUrl('https://openkm.com');
		$this->assertTrue($url);

		$url = Validate::validateUrl('openkm.com');
		$this->assertFalse($url);
	}

	public function testPassword() {
		$password = Validate::validatePassword('12345678');
		$this->assertTrue($password);

		$password = Validate::validatePassword('123456a');
		$this->assertFalse($password);
	}
}
