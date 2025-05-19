<?php

    include_once 'Produto.class.php';

    $produto1 = new Produto("Tamires", 15.00);
    $produto1->adicionarEstoque(5);
    $produto1->removerEstoque(3);
    $produto1->mostrarDetalhes();

?>