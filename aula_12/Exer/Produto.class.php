<?php

    class Produto {
        private $nome;
        private $Preco;
        private $Quantidade;

        //Construtor para iniciar o Nome, Preço e Quantidade
        public function __construct($nome, $Preco = 0, $Quantidade = 0){
            $this->Nome = $nome;
            $this->Valor = $Preco;
            $this->Quant = $Quantidade;
        }

        //Getters
        public function getNome(){
            return $this->Nome;
        }

        public function getPreco(){
            return $this->Valor;
        }

        //Setter
        public function setNome($nome){
            $this->Nome = $nome;
        }

        public function setPreco($Preco){
            $this->Valor = $Preco;
        }

        public function adicionarEstoque($Quantidade){
            if ($Quantidade > 0) {
                $this->Quant += $Quantidade;
            } else {
                echo 'É necessario que o valor seja maior do que 0';
            }
        }

        public function removerEstoque($Quantidade){
            if ($Quantidade > 0) {
                $this->Quant -= $Quantidade;
            } else {
                echo 'É necessario que o valor seja maior do que 0';
            }
        }

        public function mostrarDetalhes(){
            echo "Nome: " . $this->Nome . "<br>";
            echo "Valor: R$" . number_format($this->Valor, 2, ",", ".") . "<br>";
            echo "Quantidade: " . $this->Quant . "<hr>";
        }
    }

?>