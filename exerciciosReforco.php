<?php

/***
 * 1-) Recriar o exercicio da tabuada utilizando funcoes
 * 2-) Encontrar os 10 primeiros numeros Pares e os 10 primeiros numeros impares.
 * 3-) Encontrar os 10 primeiros numeros primos, a partir do 10.
 * 4-) Ordenar em ordem crescente o array [10, 5, 2, 30, 85, 14].
 *          Saída esperada: [2, 5, 10, 14, 30, 85].
 * Não se deve utilizar funcoes nativas do php como asort, usort e sort.
 */

 // 1-) Recriar o exercicio da tabuada utilizando funcoes.

 function tabuada($numero) {
    for($i = 0; $i <= 10; $i++) {
        echo "<br>$numero x $i = " . $numero * $i;
    }
 }

//  tabuada(7); 
