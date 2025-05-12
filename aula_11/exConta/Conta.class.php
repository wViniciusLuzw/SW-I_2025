<?php

    class Conta {
        public $Nome;
        public $CPF;
        private $Saldo;

        public function Sacar($valor) {
            if ($this->Saldo >= $valor){
                $this->Saldo -= $valor;
                $texto =  "Saque realizado. Saldo atual é de R$" . $this->Saldo . "<hr>";
                return $texto;
            } else {
                return "ERRO 404: Saldo Insuficiênte" . "<hr>";
            }
            return $this->Saldo;
        }

        public function Depositar($valor) {
            $this->Saldo += $valor;
            $texto = "Deposito realizado. Saldo atual é de R$" . $this->Saldo . "<hr>";
            echo $texto;
        }

        public function mostrarDados() {
            echo "Nome do Cliente: " . $this->Nome . "<br>";
            echo "CPF do Cliente: " . $this->CPF . "<br>";
            echo "Saldo do Cliente: R$" . $this->Saldo . "<br>";
            echo "<hr>";
        }
    }

?>