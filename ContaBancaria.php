<?php

require_once "./Database.php";

class ContaBancaria {
    public string $titular = "";
    public string $destinatario = "";
    public float $saldo = 0;

    private $bancoDeDados;
    
    public function __construct($bancoDeDados)
    {
        $this->bancoDeDados = $bancoDeDados;
    }

    private function processarDadosVisualizacao($dados)
    {
        foreach ($dados as $idx => $linha) {
            echo "Id: $linha->id Nome: $linha->nome_titular Saldo: $linha->saldo";   
            echo "<br>";
        }
    }

    public function criarConta(string $nome, float $saldoInicial = 0.0)
    {

    }

    public function sacar($idConta, $valor)
    {

    }

    public function depositar($idConta, $valor)
    {

    }

    public function pix($contaOrigem, $contaDestino, $valor)
    {
     
    }

    public function listarContas()
    {
        $sql = "SELECT * FROM conta_bancaria;";
        $dados = $this->bancoDeDados->execQuery($sql);
        $this->processarDadosVisualizacao($dados);
    }

    public function extrato($idConta) {

        if (empty($idConta)) {
            echo "Erro, id da conta está em branco ou é inváldo!";
            exit;
        }

        $sql = "SELECT * FROM conta_bancaria WHERE id = '$idConta';";
        $dados = $this->bancoDeDados->execQuery($sql);
        $this->processarDadosVisualizacao($dados);
    }
}

$id = $_REQUEST["id"] ?? 0;
$saldoMin = $_REQUEST["saldoMin"] ?? 0;
$saldoMax = $_REQUEST["saldoMax"] ?? 0;
$nomeTitular = $_REQUEST["nomeTitular"] ?? "";

$conta = new ContaBancaria($bancoDeDados);
echo $conta->extrato($id);

exit;

if ($id > 0) {
    $sql .= " AND id = '$id'";
    // $sql = "SELECT * FROM conta_bancaria WHERE 1=1 AND id = 10"; 
}

if ($saldoMin > 0) {
    $sql .= " AND saldo >= $saldoMin";
}

if ($saldoMax > 0) {
    $sql .= " AND saldo <= $saldoMax";
}

if (!empty($nomeTitular)) {
    $sql .= " AND nome_titular LIKE '%$nomeTitular%'";
}
