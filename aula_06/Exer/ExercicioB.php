<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExercicioB</title>
    <style>
        table, th, tr, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>Tabela Dinâmica com Input do Usuário (WHILE)</h1>
    <h3>Permita que o usuário defina o número de linhas e colunas da tabela através de um formulário HTML.</h3>
    <h3>Gere a tabela dinamicamente usando PHP e um laço while.</h3>

    <form method="post">
        <p>Número de linhas <input type="number" min="1" name="cxnumLin" required></p>
        <p>Número de colunas <input type="number" min="1" name="cxnumCol" required></p>
        <input type="submit"> 
    </form>

    <table>
        <?php
            $Linhas = $_POST['cxnumLin'];
            $Colunas = $_POST['cxnumCol'];

            $contLinha = 0;
            while ($contLinha <= $Linhas){
                echo "<tr>";
                if ($contLinha == 0) {
                    $contColuna = 1;
                    while ($contColuna <= $Colunas){
                        echo "<th>$contColuna</th>";
                        $contColuna++;
                    }
                }else{
                    $contColuna = 1;
                    while ($contColuna <= $Colunas){
                        echo "<td>Linha $contLinha Coluna $contColuna</td>";
                        $contColuna++;
                    }
                }
                echo "</tr>";
                $contLinha++;
            }
        ?>
    </table>

</body>
</html>