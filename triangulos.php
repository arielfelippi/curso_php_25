<?php

/**
 * Dado 3 medidas(lado) informadas pelo usuario
 * diga qual é o tipo do triangulo:
 *  1 - equilatero
 *  2 - isosceles
 *  3 - escaleno
 */

$ladoA =10;
$ladoB =10;
$ladoC =10;

if ($ladoA == $ladoB && $ladoB == $ladoC) {
    echo "As medidas informadas formam um triangulo Equilatero.";
}
