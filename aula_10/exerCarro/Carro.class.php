<?php

class Carro{
    public $marca;
    public $modelo;
    public $combustivel;
    public $numPortas;
    public $capacidade_tanque;

    public function mostrarDados(){
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Combustivel: " . $this->combustivel . "<br>";
        echo "Número de Portas: " . $this->numPortas . "<br>";
        echo "Capacidade do Tanque: " . $this->capacidade_tanque . "<br>";
    }
}

?>