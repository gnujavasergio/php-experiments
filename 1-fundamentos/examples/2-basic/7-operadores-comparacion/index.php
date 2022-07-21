<?php
$price = 200;

echo "price = $price \n";
echo "\n";

// Equal to
$value = $price == $price;
echo "price == price = $value \n";
var_dump($value);

// Equal to
$value = $price == "200";
echo "price(number) == '200'(string) = $value \n";
var_dump($value);

// Equal to/Equal type
$value = $price === 200;
echo "price(number) === 200(number) = $value \n";
var_dump($value);

// Equal to/Equal type
$value = $price === "200";
echo "price(number) === '200'(string) = $value \n";
var_dump($value);
echo "\n";

// Not Equal to
$value = $price != 100;
echo "price(number) != 100 = $value \n";
var_dump($value);

// Not Equal to/Not equal type
$value = $price !== "200";
echo "price(number) !== '200' = $value \n";
var_dump($value);
echo "\n";

// Greater than
$value = $price > 10;
echo "price > 10 = $value \n";
var_dump($value);

// Greater than or equal to
$value = $price >= $price;
echo "price >= price = $value \n";
var_dump($value);

// Less than
$value = $price < 1500;
echo "price < 1500 = $value \n";
var_dump($value);

// Less than or equal to
$value = $price <= $price;
echo "price <= price = $value \n";
var_dump($value);

// Operador nave espacial
echo "Si el numero que esta a la izquiera es mayor al numero que esta a la derecha es 1 \n";
echo "price <=> 100 = " . ($price <=> 100) . "\n";

echo "Si el numero que esta a la izquiera es igual al numero que esta a la derecha es 0 \n";
echo "price <=> price = " . ($price <=> $price) . "\n";

echo "Si el numero que esta a la izquiera es menor al numero que esta a la derecha es -1 \n";
echo "100 <=> price = " . (100 <=> $price) . "\n";

