<?php

// //Realice una aplicación en php que nos permita determinar cuál es la variable
// mayor, la variable del medio y la menor, también si todas son iguales. Además,
// decir si dos de las variables son iguales si la que queda es mayor o menor, se
// debe utilizar el condicional if, else if o else.

$a = 2;
$b = 1;
$c = 1;

echo "La variable A es: " . $a . "<br>" ."La variable B es: " . $b . "<br>" . "La variable C es: ". $c; 
echo "<br>";

if ($a > $b && $b > $c){
    echo "Variable Mayor: " .$a . ", Variable Medio: " .$b . ", Variable Menor: " .$c ; 

} else if ($a > $c && $c > $b){
    echo "Variable Mayor: " .$a . ", Variable Medio: " .$c . ", Variable Menor: " .$b ;

} else if ($b > $a && $a > $c){
    echo "Variable Mayor: " .$b . ", Variable Medio: " .$a . ", Variable Menor: " .$c ;

}else if ($b > $c && $c > $a){
    echo "Variable Mayor: " .$b . ", Variable Medio: " .$c . ", Variable Menor: " .$a ;

}else if ($c > $b && $b > $a){
    echo "Variable Mayor: " .$c . ", Variable Medio: " .$b . ", Variable Menor: " .$a ;

}else if ($c > $a && $a > $b){
    echo "Variable Mayor: " .$c . ", Variable Medio: " .$a . ", Variable Menor: " .$b ;
}

//Comparación de igualdad.

if ($a == $b && $b > $c){
    echo "La variable se repite con: " .$a . $b . ", Variable Menor es: " .$c; 

} else if ($a == $c && $c > $b){
    echo "La variable se repite con: " .$a . $c . ", Variable Mayor es: " .$c; 

} else if ($b == $a && $a > $c){
    echo "La variable se repite con: " .$b . $a . ", Variable Menor es: " .$c; 

}else if ($b == $c && $c > $a){
    echo "La variable se repite con: " .$b . $c . ", Variable Mayor es: " .$c; 

}else if ($c == $b && $b > $a){
    echo "La variable se repite con: " .$c . $b . ", Variable Menor es: " .$a; 

}else if ($c == $a && $a > $b){
    echo "La variable se repite con: " .$c . $a . ", Variable Mayor es: " .$a; 
}

//Igualdad. 

if ($a == $b && $b == $c){
    echo "Las tres son iguales: A = " . $a . ", B = " . $b . ", C = " . $c ;
}

a>b>c
a>c>b
b>a>c
b>c>a
c>b>a
c>a>b