<?php

require_once "./ArquivoTxt.php";

class ContaBancaria {
    public $titular = "";
    public $destinatario = "";
    public $saldo = 0;
    public $historico = [];
    
    private function temSaldo($valor) {

        if ($valor <= $this->saldo) {
            return true;
        }

        return false;
    }

    public function sacar($valor) {
        $temSaldo = $this->temSaldo($valor);

        if (!$temSaldo) {
            throw new Exception("Erro! Saldo atual R$: $this->saldo. Valor à sacar:  R$ $valor.");
        }

        $this->saldo -= $valor; // $this->saldo = $this->saldo - $valor;
        $this->setHistorico($this->titular, $this->saldo);
    }

    public function depositar($valor) {

        if ($valor <= 0) {
            throw new Exception("Erro! Valor invalido. R$ $valor.");
        }

        $this->saldo += $valor;
        $this->setHistorico($this->titular, $this->saldo, "Deposito");
    }

    public function pix($valor) {

        $temSaldo = $this->temSaldo($valor);

        if (!$temSaldo) {
           throw new Exception("Erro ao efetuar o PIX.<br> Saldo atual R$: $this->saldo. valor a transferir R$ $valor.");
        }

        $this->saldo -= $valor;
        $this->setHistorico("Ana", $this->saldo, "Maria");
    }

    private function setHistorico($titular, $valor, $destinatario = "Saque") {
        $arrDestinatario = [
            $destinatario => $valor,
        ];

        $arrTitular = [
            $titular => $arrDestinatario,
        ];

        $this->historico[] = $arrTitular;
    }

    public function extrato() {
        // $this->historico = [
        //     "odair" => [
        //         "ariel" => 20.50
        //     ],
        //     "ariel" => [
        //         "diego" => 50
        //     ]
        // ];

        for($i=0; $i < count($this->historico); $i++) {
            foreach($this->historico[$i] as $titular => $destinatarios) {
                foreach($destinatarios as $destinatario => $valor) {
                    echo "Titular: $titular Destinatario: $destinatario valor: R$ $valor.<br>";
                }
            }
        }

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
