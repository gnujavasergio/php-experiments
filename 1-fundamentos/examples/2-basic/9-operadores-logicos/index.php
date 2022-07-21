<?php

$price = 200;
echo "price = $price \n";

// AND (&&) Operator
if ($price > 10 && $price < 1600) {
	echo "price > 10 && price < 1600 is 'true' \n";
}

// Operador AND (&&)
if ($price > 10 && $price < 200) {
	echo "price > 10 && price < 200 is 'true' \n";
} else {
	echo "price > 10 && price < 200 is 'false' \n";
}

// Operador OR (||)
if ($price > 10 || $price < 1600) {
	echo "price > 10 || price < 1600 is 'true' \n";
}

// Operador OR (||)
if ($price > 10 || $price > 1600) {
	echo "price > 10 || price > 1600 is 'true' \n";
}

// Operador NOT (!)
if (!($price < 10)) {
	echo "!(price < 10) is 'true' \n";
}
