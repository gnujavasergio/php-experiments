<?php
$heightInCM = 185;
$heightCategory = "";

// Sin utilizar el operador ternario
if ($heightInCM > 175) {
	$heightCategory = "tall";
} else {
	$heightCategory = "Short";
}
echo $heightCategory . "\n";


// Utilizando el operador tenario
$hCategory = $heightInCM > 175 ? "Tall" : "Short";
echo $hCategory . "\n";

// Ternary
$price = 1000;
$result = $price < 1500 ? "'less than 1500'" : "'greater than 1500'";
echo "ternary = $result \n";
