<?php

class ContaBancaria {
    public $titular = "";
    public $destinatario = "";
    public $saldo = 0;
    public $historico = [];
    
    public function sacar() {}
    public function depositar() {}
    public function pix() {

        $this->setHistorico("Joao", "Pedro", 150);
    }
    public function verSaldo() {}

    private function setHistorico($titular, $destinatario, $valor) {
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

$conta = new ContaBancaria();
$conta->pix();
echo $conta->extrato();
