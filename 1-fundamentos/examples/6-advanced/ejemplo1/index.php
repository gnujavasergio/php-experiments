<?php
$firstname = 'Sergio';
$lastname = 'Ochoa';
$fullname = "$firstname $lastname";
$age = 0;
$cmheight = 174;
$mheight = $cmheight / 100; // PHP Warning

echo "La altura de $fullname es $mheight metros";

if ($age <= 0) {
    // Función para generar un error
    trigger_error('La edad tiene que se mayor a 0',E_USER_ERROR);
}
