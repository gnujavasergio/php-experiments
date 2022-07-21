<?php

// Arreglos indexados
$languages = ['Java', 'JavaScript', 'Kotlin', 'NodeJS', 'TypeScript', 'Dart', 'PHP'];
// Acceder por indice a un elemento del array
var_dump($languages[0]);

// Para añadir un elemento al final
$languages[] = 'Python';
// array_push: Para añadir un elementos al final de mi array
array_push($languages, "Ruby");

// Para eleminar el primer elemento de un array
array_shift($languages);

array_splice($languages, 3, 2);
var_dump($languages);

// Array with key and value o Arrays asociativos
$developer = [
	'firstName' => 'Sergio',
	'lastName' => 'Ochoa',
	'age' => 34,
	'salary' => 45421,
	'skill' => ['Java', 'JavaScript', 'Dart']
];
var_dump($developer['firstName']);

// Array multidimensional with key and value
$jobs = [
	[
		'title' => 'Java Developer',
		'description' => 'This is an awesome job!'
	],
	[
		'title' => 'JavaScript Developer',
		'description' => 'This is an awesome job'
	]
];

var_dump($jobs[0]['title']);
var_dump($jobs[0]['description']);


// count: Para contar cuantos elementos tiene un array
var_dump(count($languages));


// is_array: para saver si es un array
echo "Es un arrary: " . is_array($languages);

// explode: convertir un string en un array
$value = "Lunes, Martes, Miercoles, Jueves, Viernes, Sabado, Domingo";
$days = explode(",", $value);

// implode: convertir un array a un string
$text = implode(";", $days);
var_dump($text);




