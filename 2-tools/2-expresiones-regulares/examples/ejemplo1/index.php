<?php
$password = '123456';
var_dump(preg_match('/^[0-9]{6,9}$/',$password));

$message = 'hola, Me gusta programar';
// i - discrimina mayusculas y minusculas
var_dump(preg_match('/H[aeiou]la]$/i', $message));
var_dump(preg_match('/H[0-9]la]$/i', $message)); // Rango de numeros

$ciudad = "México es un pais de Latinomerica";
var_dump(preg_match('/Mé(x|j)ico/', $ciudad));


$numbers = "Los numeros enteros son  1, 2, 3, 4, 5, 6, 7, 8, 9";
var_dump(preg_match_all('/\d/', $numbers, $matches));
var_dump($matches);
echo "\n";
var_dump(preg_match_all('/[0-9]/', $numbers, $matches));
var_dump($matches);

echo "\n";
var_dump(preg_match_all('/[a-z]/', $numbers, $matches));
var_dump($matches);

echo "\n";
var_dump(preg_match_all('/\W/', $numbers, $matches)); // caracteres especiales
var_dump($matches);

echo "hoooola \n";
$message = 'hoooola';
var_dump(preg_match('/ho*la/', $message)); // coincidencias con * 0 o mas

echo "hla \n";
$message = 'hla';
var_dump(preg_match('/ho+la/', $message)); // coincidencias con + 1 o mas

echo "hola \n";
$message = 'hola';
var_dump(preg_match('/ho?la/', $message)); // coincidencias con ?  0 o 1

echo "leer \n";
var_dump(preg_match('/le{2}r/', 'leer')); // coincidencias con ?  0 o 1
