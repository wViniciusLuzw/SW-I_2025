<?php
    include_once 'Carro.class.php';

    $carro1 = new Carro();

    $carro1->$marca = "Volkswagen";
    $carro1->$modelo = "Polo 1.0";
    $carro1->$combustivel = "Etanol e Gasolina";
    $carro1->$numPortas = 1;
    $carro1->$capacidade_tanque = 25;

    $carro1->mostrarDados();

?>