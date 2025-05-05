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
        $this->status = true;
    }

    public function Desligar(){
        $this->status = false;
    }

    public function mostrarDados(){
        echo "Fabricante: " . $this->fabricante . "<br>";
        echo "Tensao: " . $this->tensao . "<br>";
        echo "Potência: " . $this->potencia . "<br>";
        echo "Cor: " . $this->cor . "<br>";

        if ($this->status == true){
            echo "Status: Ligada <br>";
        }else{
            echo "Status: Desligada <br>";
        }
    }
}

?>