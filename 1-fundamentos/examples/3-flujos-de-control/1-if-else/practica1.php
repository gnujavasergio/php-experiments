<?php

$jsonPerson = '{"firstName": "Sergio Antonio","lastName": "Ochoa Martinez","age": 33,"isPro": true,"strongman": true,"engineer": true,"singer": false,"dj": false }';
var_dump($jsonPerson);
$person = json_decode($jsonPerson);
var_dump($person);

// Que profesiones tiene
echo "$person->firstName es: \n";
if ($person->strongman) {
	echo "Strongman \n";
} else {
	echo "No es Strongman \n";
}

if ($person->engineer) {
	echo "Ingeniero \n";
} else {
	echo "No es Ingeniero \n";
}

if ($person->singer) {
	echo "Cantante \n";
} else {
	echo "No es cantante \n";
}

if ($person->dj) {
	echo "DJ \n";
} else {
	echo "No es DJ \n";
}
// Mayor de edad
if ($person->age >= 18) {
	echo "$person->firstName es mayor de edad \n";
} else {
	echo "$person->firstName no es mayor de edad \n";
}
