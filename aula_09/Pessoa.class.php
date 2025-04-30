<?php
    class Pessoa{
        // ATRIBUTOS
        public $Nome;
        public $Peso;
        public $Altura;

        // Método
        public function MostrarDados(){
            echo "O nome é: " . $this->Nome . "<br>";
            echo "O peso é: " . $this->Peso . "<br>";
            echo "A altura é: " . $this->Altura . "<br>";
            echo "<hr>";
        }

        public function Apresentar(){
            echo "O nome é: " . $this->Nome . " ";
            echo "O peso é: " . $this->Peso . " ";
            echo "A altura é: " . $this->Altura . " ";
            echo "<hr>";
        }
    }

?>