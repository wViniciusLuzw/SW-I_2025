<?php
    $num01 = $_GET['cxnum01'];
    $num02 = $_GET['cxnum02'];
    $num03 = $_GET['cxnum03'];

    if (is_numeric($num01) && is_numeric($num02) && is_numeric($num03)){
        if (($num03 < $num01) && ($num02 < $num01)){
            echo "num01 é maior";
        } elseif (($num03 < $num02) && ($num01 < $num02)) {
            echo "num02 é maior";
        } else{
            echo "num03 é maior";
        }
    }else{
        echo "<p>Digite um valor válido</p>";
    }
?>