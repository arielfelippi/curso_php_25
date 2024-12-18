<?php
/**
 * Criar um algoritmo que simula o funcionamento de um calendario.
 * Variaveis: $data = '31/01/2025'
 * validar a data.
 * validar tambem se o ano é Bissexto.
 * Dica: If else, 
 */

 // 3 1 / 0 1 / 2 0 2 5
 // 0 1 2 3 4 5 6 7 8 9
$data ='31/01/2025';

$dia = substr($data, 0 , 2);
$mes = substr($data, 3 , 2);
$ano = substr($data, 6 , 4);
