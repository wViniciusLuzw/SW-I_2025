<?php
    include_once 'Lampada.class.php';

    $lamp1 = new Lampada();

    $lamp1->fabricante = "OSRAM";
    $lamp1->tensao = 110;
    $lamp1->potencia = 50;
    $lamp1->cor = "Branca";

    $lamp1->MostrarDados();
?>