<?php
const VERSION = 'OpenKM 6.3';
const USER = 'okmAdmin';
const password ='123456';
const URL = 'http://localhost:8080/OpenKM';

$url = 'http://localhost:8080/openkm';
define('OKM_VERSION', 'OpenKM 7.0');
define('OKM_USER', 'okmAdmin');
define('OKM_PASSWORD', '213456');
define('OKM_URL', $url);

print_r(get_defined_constants(true));