<?php

$horas = readline("Por favor, ingrese el numero de horas: ");
$minutos = readline("Por favor, ingrese el numero de minutos: ");
$segundos = readline("Por favor, ingrese el numero de segundos: ");

$timeSeconds = ($horas * 60 * 60) + ($minutos * 60) + $segundos;

echo "El total de segundos es $timeSeconds \n";
