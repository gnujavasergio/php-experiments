<?php
// Variables sin tipo o inferido
// int
$isDecimal = 1234; // número decimal
$isNegativo = -123; // un número negativo
$isOctal = 0123; // número octal (equivale a 83 decimal)
$isHexadeciml = 0x1A; // número hexadecimal (equivale a 26 decimal)
$isBinario = 0b11111111; // número binario (equivale al 255 decimal)

$phone = 73434645;

// double o float
$a = 1.234;
$b = 1.2e3;
$c = 7E-10;
$d = 1_234.567; // a partir de PHP 7.4.0

$height = 1.75;

// bool
$isPro = false;
$isPro = true;

// Para extraccion de datos
var_dump($phone);
var_dump($height);
var_dump($isPro);


