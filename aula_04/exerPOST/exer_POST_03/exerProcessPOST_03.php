<?php
    $login = $_POST['cxlogin'];
    $senha = $_POST['cxsenha'];
    $LOGIN="etec";
    $SENHA="informatica";

    if (($login == $LOGIN) && ($senha == $SENHA)){
        echo "<h5>Login feito com sucesso</h5>";
    }else{
        echo "<h5>Senha Incorreta</h5>";
    }
    
?>