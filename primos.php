<?php
/**
 * Exercicio2:
 * Dado um numero informado  pelo usuario
 * informar se ele é um numero primo.
 */

 // 1, 3, 5, 7, 9

 /*
    9 / 2
    9 / 3
    ...
    9 / 8 
*/

$numero = 9;

// (9 -1) $numero - 1
$limitador = $numero - 1;

$primo = true;

for ($i = 2; $i <= $limitador; $i++ ) {

    // break
    if ($resto == 0) {
        $primo = false;
        break;
    }
    
}


if ($primo) {
    echo "<br>O $numero é primo.";
} else {
    echo "<br>O $numero NÃO é primo.";
}