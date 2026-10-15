<?php

// Definir tres variables enteras. Luego definir un string que incorpore dichas
// variables y las sustituya en tiempo de ejecución. Recordar que una variable se
// sustituye cuando el string está encerrado por comillas dobles:

$variable1 = 12;

$variable2 = 10;

$variable3 = 15;

$variable4 = "La variable 1 es: " . $variable1 . "<br>" . "La variable 2 es: " . $variable2 . "<br>" . "La variable 3 es: " . $variable3; 

echo $variable4;