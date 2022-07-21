<?php
$cantidad = readline("Por favor , ingrese la cantidad que quiere retirar: ");
if ($cantidad > 10 && $cantidad < 3500) {
	echo "Tu retiro esta en proceso... \n";

} else {
	echo "Lo sentimos, solo puedes retirar una cantidad mayor a 10 bs y menor a 3500bs \n";
}
