<?php
// Swich normal o simple
$productId = 2;
switch ($productId) {
	case 1:
		echo "Camisa - Black, 58 \n";
		break; // Sirve para salir del caso
	case 2:
		echo "Polera, Red \n";
		break;
	case 3:
		echo "Corto, M \n";
		break;
	default: // Declaración si es que no hay coencidencias
		echo "Producto desconocido \n";
		break;
}

// Default en cualquier lugar
$productId = 200;
switch ($productId) {
	default:
		echo "Producto desconocido \n";
		break;
	case 1:
		echo "Camisa - Black, 58 \n";
		break;
	case 2:
		echo "Polera, Red \n";
		break;
	case 3:
		echo "Corto, M \n";
		break;
}


// Multiple case
$color = "Red";
switch ($color) {
	case "Red":
	case "Pink":
		echo "The color is red \n";
		break;
	case "Blue":
	case "Light Blue":
	case "Dark Blue":
		echo "The color is blue \n";
		break;
	case "Gray":
	case "Grey":
		echo "The color is grey \n";
		break;
	default:
		echo "Unknown color \n";
		break;
}

// Obligar el break
$productId = 2;
switch ($productId) {
	case 1:
		echo "Camisa - Black, 58 \n";
		break;
	case 2:
		echo "Polera, Red \n";
	case 3:
		echo "Corto, M \n";
		break;
	default:
		echo "Unknown product \n";
		break;
}

// Comparación estricta
$productId = "2";
switch ($productId) {
	case 1:
		echo "HL Road Frame - Black, 58 \n";
		break;
	case 2:
		echo "Sport-100 Helmet, Red \n";
		break;
	case 3:
		echo "Mountain Bike Socks, M \n";
		break;
	default:
		echo "Unknown product \n";
		break;
}

// Mas de una linea de codigo en un bloque
$productId = readline("Que producto quiere (1,2,3)");
switch ($productId) {
	case 1:
		$message = "HL Road Frame - Black, 58 \n";
		echo $message;
		break;
	case 2:
		$message = "Sport-100 Helmet, Red \n";
		echo $message;
		break;
	case 3:
		$message = "Mountain Bike Socks, M \n";
		echo $message;
		break;
	default:
		$message = "Unknown product \n";
		echo $message;
		break;
}
