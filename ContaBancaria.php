<?php

require_once "./ArquivoTxt.php";

class ContaBancaria {
    public $titular = "";
    public $destinatario = "";
    public $saldo = 0;

    private ArquivoTxt $arquivoTxt;
    
    public function __construct(ArquivoTxt $arquivoTxt)
    {
        $this->arquivoTxt = $arquivoTxt;
    }
    
    public function listarContas(): array
    {
        return $this->arquivoTxt->ler();
    }

    public function criarConta(string $nome, float $saldoInicial = 0.0): void
    {
        $dados = $this->arquivoTxt->ler();
        $idConta = $this->gerarIdUnico($dados);

        $novaConta = [
            'id' => $idConta,
            'nome' => $nome,
            'saldo' => $saldoInicial,
        ];

        $dados[] = $novaConta;
        $this->arquivoTxt->escrever($dados);
    }

    public function sacar($idConta, $valor) {
        $dados = $this->arquivoTxt->ler();
        foreach ($dados as &$conta) {
            if ($conta['id'] === $idConta) {
                if ($conta['saldo'] >= $valor) {
                    $conta['saldo'] -= $valor;
                    $this->arquivoTxt->escrever($dados);
                    return true;
                }
                return false;
            }
        }
        return false;
    }

    public function depositar($idConta, $valor) {

        $dados = $this->arquivoTxt->ler();
        foreach ($dados as &$conta) {
            if ($conta['id'] === $idConta) {
                $conta['saldo'] += $valor;
                $this->arquivoTxt->escrever($dados);
                return true;
            }
        }
        return false;
    }

    public function pix($valor) {

        $temSaldo = $this->temSaldo($valor);

        if (!$temSaldo) {
           throw new Exception("Erro ao efetuar o PIX.<br> Saldo atual R$: $this->saldo. valor a transferir R$ $valor.");
        }

        $this->saldo -= $valor;
        $this->setHistorico("Ana", $this->saldo, "Maria");
    }
    public function extrato() {
        $dados = $this->arquivoTxt->ler();
        foreach ($dados as $conta) {
            if ($conta['id'] === $idConta) {
                return $conta['saldo'];
            }
        }
        
        return null; 
    }
}

// $conta = new ContaBancaria();
// $conta->depositar(500);
// $conta->sacar(100);
// $conta->pix(200);
// echo $conta->extrato();

$caminhoArquivo = "C://users//aluno//documents//";
$nomeArquivo = "banco_do_brasil.txt";
$arquivo = $caminhoArquivo . $nomeArquivo;

$arquivoTxt = new ArquivoTxt($nomeArquivo);
$conta = [
    "id" => 10,
    "nome" => "Joao",
    "saldo" => 100,
];

$arquivoTxt->escrever($conta);
echo $arquivoTxt->ler();
