<?php

echo "<table border = 5>";

    for($linha = 0; $linha < 3; $linha++){
        
        echo "<tr>";
        for($coluna = 0; $coluna < 3; $coluna++){
            echo "<td>($linha, $coluna)</td>";
        }
        echo "</tr>";
    }

echo "</table>";

?>