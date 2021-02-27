<?php

$firstname = 'Sergio';
$lastname = 'Ochoa';
$fullname = "$firstname $lastname";

$cmheight = 174;
$mheight = $cmheight / 0; // PHP Warning

echo "La altura de $fullname es $mheight metros";
