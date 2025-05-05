<?php

class Lampada{
    //Atributos
    public $fabricante;
    public $tensao;
    public $potencia;
    public $cor;
    public $status;

    //Métodos
    public function Ligar(){
        
    }

    public function Desligar(){

    }

    public function mostrarDados(){
        echo "Fabricante: " . $this->fabricante . "<br>";
        echo "Tensao: " . $this->tensao . "<br>";
        echo "Potencia: " . $this->potencia . "<br>";
        echo "Cor: " . $this->cor . "<br>";
        echo "Status: " . $this->status . "<br>";
    }
}

?>