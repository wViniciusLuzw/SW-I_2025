<?php
    include_once 'Conta.class.php';

    $conta01 = new Conta();

    $conta01->Nome = "Rafael Ramos Araujo";
    $conta01->CPF = "000.000.000-00";

    //$conta01->Saldo = 120;

    $conta01->mostrarDados(); 

    $conta01->Depositar(520);

    $conta01->mostrarDados();

    echo $conta01->Sacar(640);

    $conta01->mostrarDados();

?>