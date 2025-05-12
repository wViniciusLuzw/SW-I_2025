<?php
    include_once 'Carro.class.php';

    $carro1 = new Carro();

    $carro1->marca = "Volkswagen";
    $carro1->modelo = "Polo 1.0";
    $carro1->combustivel = "Etanol e Gasolina";
    $carro1->numPortas = 5;
    $carro1->capacidade_tanque = 52;

    $carro1->mostrarDados();

    $carro2 =  new Carro();

    $carro2->marca = "Volkswagen";
    $carro2->modelo = "Chevrolet Chevette 1974";
    $carro2->combustivel = "Álcool e Gasolina";
    $carro2->numPortas = 3;
    $carro2->capacidade_tanque = 45;

    $carro2->mostrarDados();

    $carro3 = new Carro();

    $carro3->marca = "Volkswagen";
    $carro3->modelo = "Saveiro Quadrada 1994";
    $carro3->combustivel = "Gasolina";
    $carro3->numPortas = 2;
    $carro3->capacidade_tanque = 53;

    $carro3->mostrarDados();

    $carro4 = new Carro();

    $carro4->marca = "Volkswagen";
    $carro4->modelo = "Voyage 1982";
    $carro4->combustivel = "Gasolina";
    $carro4->numPortas = 3;
    $carro4->capacidade_tanque = 55;

    $carro4->mostrarDados();

    $carro5 = new Carro();

    $carro5->marca = "Volkswagen";
    $carro5->modelo = "Gol 1982";
    $carro5->combustivel = "Gasolina";
    $carro5->numPortas = 3;
    $carro5->capacidade_tanque = 50;

?>