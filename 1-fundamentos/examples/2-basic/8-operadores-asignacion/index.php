<?php
$price = 200;

echo "price = $price \n";

// Addition
$price += 100;
echo "price += 100 = $price \n";

// Subtraction
$price -= 100;
echo "price -= 100 = $price \n";

// Multiplication
$price *= 2;
echo "price *= 2 = $price \n";

// Division
$price /= 2;
echo "price /= 2 = $price \n";

// Exponentiation
$price **= 2;
echo "price **= 2 = $price \n";

// Modulus
$price %= 2;
echo "price %= 3 = $price \n";

// Concatenacion
$name = "Sergio";
$name .= " Ochoa \n";
echo $name;

// Operador de asignacion de nulos
$price = $cost ?? 200;
echo "La variable cost no fue declarada por lo tante es nulo. \n";
echo "price = cost ?? 200  = $price \n";


