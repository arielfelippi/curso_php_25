<?php

class Calculadora {
    public $valor1 = 0;
    public $valor2 = 0;
    public $operador = "";
    public $resultado = 0;

    public function __construct($num1, $num2)
    {
        $this->set($num1, $num2);      
    }

    public function set($num1, $num2)
    {
        $this->valor1 = $num1;
        $this->valor2 = $num2;        
    }

    public function zerar()
    {
        $this->valor1 = 0;
        $this->valor2 = 0;
        $this->operador = "";
        $this->resultado = 0;
    }

    public function somar() {
        $this->operador = "+";
        $this->resultado = $this->valor1 + $this->valor2;

        return $this->__toString();
    }

    public function subtrair() {
        $this->operador = "-";
        $this->resultado = $this->valor1 - $this->valor2;

        return $this->__toString();
    }

    public function multiplicar() {
        $this->operador = "*";
        $this->resultado = $this->valor1 * $this->valor2;

        return $this->__toString();
    }

    public function dividir() {

        if (empty($this->valor1) || empty($this->valor2)) {
            return "Não é possivel efetuar divisao por 0.<br>";
        }

        $this->operador = "/";
        $this->resultado = $this->valor1 / $this->valor2;

        return $this->__toString();
    }

    public function __toString()
    {
        if (empty($this->valor1) || empty($this->valor2)) {
            return "O resultado é: {$this->resultado}.<br>";
        }

        return "O resultado {$this->valor1} {$this->operador} {$this->valor2} é: {$this->resultado}.<br>";
        /// O resultado 10 + 10 é: 20.
    }
}

$num1 = 10;
$num2 = 10;

$calculadora = new Calculadora($num1, $num2);

echo $calculadora->somar();
echo $calculadora->multiplicar();
echo $calculadora->set(20, 20);
echo $calculadora->somar();

echo $calculadora->set($num1, $num2);
echo $calculadora->somar();
$calculadora->zerar();
// echo $calculadora->dividir();
echo $calculadora->somar();
