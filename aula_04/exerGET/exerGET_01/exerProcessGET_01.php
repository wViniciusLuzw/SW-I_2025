<?php
    $nome = $_GET['cxnome'];
    $nota01 = $_GET['cxnota01'];
    $nota02 = $_GET['cxnota02'];
    $nota03 = $_GET['cxnota03'];

    if (is_numeric($nota01) && is_numeric($nota02) && is_numeric($nota03)){

        echo "<p>Todos os valores são válidos</p>";
        $media = ($nota01 + $nota02 + $nota03)/3;
        echo "<p>Nome do Aluno: $nome</p>";
        echo "<p>A média do Aluno é: $media</p>";

    }else{
        echo "<p>Digite um valor válido</p>";
    }
?>