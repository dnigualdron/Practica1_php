<?php

// Generar un valor aleatorio entre 20 y 25. Luego imprimir en español el número
// (Ejemplo. Si se genera el 21 luego mostrar en la página el string “Veintiuno”). 
// Para ver si una variable es igual a cierto valor debemos plantear una condición similar a:
// If ($valor==21) {
// //algoritmo
// }

$aleatorio = rand(20, 25);

if ($aleatorio == 20 ){
    echo "El número es 'Veinte'";
} else if ($aleatorio == 21 ){
    echo "El número es 'Veintiuno'";
} else if ($aleatorio == 22 ){
    echo "El número es 'Veintidos'";
} else if ($aleatorio == 23 ){
    echo "El número es 'Veintitrés'";
}else if ($aleatorio == 24 ){
    echo "El número es 'Veinticuatro'";
}else {
    echo "El número es 'Veinticinco'";
}