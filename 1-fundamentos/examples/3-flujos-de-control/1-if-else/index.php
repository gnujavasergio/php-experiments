<?php

$age = 18;
echo "Edad: $age \n";

if ($age === 18) {
	echo "Puedes votar, será tu 1ra votación \n";
} else if ($age > 18) {
	echo "Puedes vota de nuevo \n";
} else {
	echo "Aun no puedes votar \n";
}

if ($age === 18) {
	echo "Es un adulto \n";
} else if ($age < 12) {
	echo "Es un niño \n";
} else if ($age > 12 && age < 18) {
	echo "Es adolesente \n";
} else if ($age > 60) {
	echo "Es un adulto mayor \n";
}
