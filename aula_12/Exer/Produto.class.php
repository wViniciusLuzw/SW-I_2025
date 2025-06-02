<?php

    class Produto {
        private $Nome;
        private $Valor;
        private $Quant;

        //Construtor para iniciar o Nome, Preço e Quantidade
        public function __construct($nome_prod, $preco_prod = 0, $quant_prod = 0){
            $this->Nome = $nome_prod;
            $this->Valor = $preco_prod;
            $this->Quant = $quant_prod;
        }

        //Getters
        public function getNome(){
            return $this->Nome;
        }

        public function getValor(){
            return $this->Valor;
        }

        //Setter
        public function setNome($nome){
            $this->Nome = $nome;
        }

        public function setPreco($Preco){
            $this->Valor = $Preco;
        }

        public function adicionarEstoque($qtd){
            if ($qtd > 0) {
                $this->Quant += $qtd;
            } else {
                echo 'É necessario que o valor seja maior do que 0';
            }
        }

        public function removerEstoque($qtd){
            if ($qtd > 0 && $qtd <= $this->Quant) {
                $this->Quant -= $qtd;
            } else {
                echo 'É necessario que o valor seja maior do que 0';
            }
        }

        public function mostrarDetalhes(){
            echo "Nome: " . $this->getNome() . "<br>";
            echo "Preço: " . $this->getValor() . "<br>";
            echo "Quantidade: " . $this->Quant . "<br>";
        }
    }

?>