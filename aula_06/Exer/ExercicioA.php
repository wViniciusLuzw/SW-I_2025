<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExercicioA</title>
    <style>
        table, tr, th, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Tabela Estilizada com Cores Alternadas (FOR)</h1>
    <h3>Crie uma tabela de 8 linhas e 4 colunas.</h3>
    <h3>Estilize para que as linhas ímpares e pares tenham cores de fundo diferentes</h3>
    
    <table>
        <tr>
            <th>Primeira Coluna</th>
            <th>Segunda Coluna</th>
            <th>Terceira Coluna</th>
            <th>Quarta Coluna</th>
        </tr>
        <?php

        for ($i=1 ; $i <= 8 ; $i++) {
            if ($i % 2 == 0) {
                $cor = "rgb(153, 0, 255)";
            }else{
                $cor = "rgb(255, 0, 0)";
            }
            echo "<tr style='background-color: $cor;'>
                    <td>Linha $i Coluna 1</td>
                    <td>Linha $i Coluna 2</td>
                    <td>Linha $i Coluna 3</td>
                    <td>Linha $i Coluna 4</td>
                </tr>";
        }
    ?>
    </table>
</body>
</html>