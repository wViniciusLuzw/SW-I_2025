<?php
    $nome = $_POST['cxnome'];
    $email = $_POST['cxemail'];
    $data = $_POST['cxdata'];
    $cartao = $_POST['cxcartao'];
    
    echo "<h3>Usúario: $nome</h3>";
    echo "<h3>E-mail: $email</h3>";
    echo "<h3>Data de nascimento: $data</h3>";
    echo "<h3>Catão selecionado: $cartao</h3>";
?>