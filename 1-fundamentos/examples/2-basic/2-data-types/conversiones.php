<?php
$fullName = "Sergio Antonio Ochoa Martinez";
$age = 34;
$height = 174.5;
$isPro = true;

/**
 * Obtener tipo
 */
echo gettype($fullName) . "\n";
echo gettype($age) . "\n";
echo gettype($height) . "\n";
echo gettype($isPro) . "\n";

/**
 * bool - cualquier
 */
var_dump((bool)"");        // bool(false)
var_dump((bool)1);         // bool(true)
var_dump((bool)-2);        // bool(true)
var_dump((bool)"foo");     // bool(true)
var_dump((bool)2.3e5);     // bool(true)
var_dump((bool)array(12)); // bool(true)
var_dump((bool)array());   // bool(false)
var_dump((bool)"false");   // bool(true)

/**
 * int
 */
var_dump((int)74.5);
var_dump((int)true);
var_dump(345);

/**
 * double
 */
var_dump((double)15);

/**
 * Conversion forzado con funciones
 */
$fullName = intval($fullName);
$age = boolval($age);
$height = strval($height);
$isPro = doubleval($isPro);

var_dump($fullName);
var_dump($age);
var_dump($height);
var_dump($isPro);
