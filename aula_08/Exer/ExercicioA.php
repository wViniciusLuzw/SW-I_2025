<p>Crie uma tabela 10x10 com a tabuada de 1 a 10</p>

<style>
    table, td, tr{
        border: 1px solid;
        text-align: center;
    }

    table{
        width: 100%;
        border-collapse: collapse;
    }
</style>

<table>
    <?php

        for($linha = 0; $linha < 11; $linha++){
            echo "<tr>";
            for($coluna = 0; $coluna < 11; $coluna++){
                echo "<td>$linha x $coluna = " . $linha*$coluna . "</td>";
            }
            echo "</tr>";
        }

    ?>
</table>