<?php

const CPF = '12345678901';
const VELOCIDADE_DA_LUZ = '320k\s2';

// tipos de dados primitivos.
$string = "Um texto qualquer";
$string = "joao do caminhao"; // override = substituir o que existia
$nomePessoa = "Ariel"; // style guide Camel Case
$nome_pessoa = "Ariel"; // style guide Snake Case
$inteiro = 2;
$float = 2.5;
$double = 2.5468;
$char = 'a';

// tipos de dados estruturais
$array = array(); // versoes antigas do php 5.0 - 7.0
$array_short = []; // veroses mais novas do php 7.0+

$objeto = new stdClass(); // POO - OOP
$classe = new stdClass();

// POO - OOP
class CanetaAzul {
    // Atributos e/ou Propriedades
    public const COR = "Azul";
    public const PLASTICO = true;
    public $nome;
    public $tipoMaterial = "Plastico";
    public $dimensoes;
    public $tipo;

   // metodos e/ou funcoes
   public function escrever() {

   }

   public function pintar() {

   }

   public function getColor() {
    return false;
   }

   public function setColor() {
    return true;
   }
}

echo "Ola 
    <b>
        <i>
            mundo!dsfsedwafsdf sdfsdwf
        </i>
        aviao
    </b>
    hangar
<br>"; // <br></br> = <br/> ou <br>

$string = "Um texto qualquer";
$string = "joao do caminhao";
echo $string; // joao do caminhao

echo "<br>CPF: " . CPF;

$a = 10;
$b = 20;
$x =  (($a + $b) * 20) /2;

echo "<br>a=$a <br>b=$b <br>x=$x";

$soma =  10 + 20;
// echo "<br>soma: " . $soma;

// // Tema de casa sera fazer a tabuada (6, 7) e mostra na tela.

$numero = 6;
echo "<b>Tabuada:</b>";
echo "<br>$numero x 1 = " . $numero * 1;
echo "<br>$numero x 2 = " . $numero * 2;
echo "<br>$numero x 3 = " . $numero * 3;
echo "<br>$numero x 4 = " . $numero * 4;
echo "<br>$numero x 5 = " . $numero * 5;
echo "<br>$numero x 6 = " . $numero * 6;
echo "<br>$numero x 7 = " . $numero * 7;
echo "<br>$numero x 8 = " . $numero * 8;
echo "<br>$numero x 9 = " . $numero * 9;
echo "<br>$numero x 10 = " . $numero * 10;

echo "<br>";

$numero = 7;
echo "<br>$numero x 1 = " . $numero * 1;
echo "<br>$numero x 2 = " . $numero * 2;
echo "<br>$numero x 3 = " . $numero * 3;
echo "<br>$numero x 4 = " . $numero * 4;
echo "<br>$numero x 5 = " . $numero * 5;
echo "<br>$numero x 6 = " . $numero * 6;
echo "<br>$numero x 7 = " . $numero * 7;
echo "<br>$numero x 8 = " . $numero * 8;
echo "<br>$numero x 9 = " . $numero * 9;
echo "<br>$numero x 10 = " . $numero * 10;

/*

/ (divisao)
*
+
-
== (igual -> comparacao)
>= (maior igual)
<= (menor igual)
&& (e)
|| (ou)
= (atribuicao)
. (concatenacao)
% (módulo) Pega o resto da divisao.

$resultado = 10 / 10; 1
$resultado = 10 % 10; 0

if else - (se senao)

CONDICAO = o que queremos avaliar/validar.

if (CONDICAO) {
    CONDICRESULTADO_CONDICAO_ANTERIORAO
} else if (CONDICAO_2) {
    RESULTADO_CONDICAO_ANTERIOR
} else {
  RESULTADO_CONDICAO_ANTERIOR
}

if (RESULTADO_CONDICAO_ANTERIOR == 10) {
    CONDICAO
}

if (AVIAO) {
 // decolar
}

*/
echo "<br>";
/**
 * Exercicio 1:
 * Atribuir um valor para uma varivel chamada numero.
 * e vamos informar ao usuario, se este numero é par ou impar.
 */ 

 $numero = 11;
 // todo numero divisivel por 2 com resto == 0 é par.

 $resto = $numero % 2; 

 if ($resto == 0) {
    echo "<br>O $numero é par.";
 } else {
    echo "<br>O $numero é impar.";
 }
