<?php
function isColorRed($value) {
	echo "en la función isColorRed() \n";
	return $value === "Red";
}

function isGreaterThan1400($value) {
	echo "En la función isGreaterThan1400() \n";
	return $value > 1400;
}

// Cortocircuito con &&
// El primer resultado es falso, la segunda parte nunca se evalua.
$result = isColorRed("Black") && isGreaterThan1400(1400);


// Cortocircuito ||
echo "";
echo "Calling isColorRed() first \n";

// Todos las operaciones se evaluan hasta que devuelven un valor verdadero
$result = isColorRed("Red") || isGreaterThan1400(200);
var_dump($result);

// Todos las operaciones se evaluan hasta que devuelven un valor verdadero el resto se salta
echo "";
echo "Llamando primero a isGreaterThan1400() \n";
$result = isGreaterThan1400(200) || isColorRed("Black");
var_dump($result);
