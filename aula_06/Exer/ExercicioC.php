<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExercicioC</title>
    <style>
        table, th, tr, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>Tabela de Produtos (FOREACH)</h1>
    <h3>Crie um array associativo com dados fictícios sobre produtos (Nome, Preço, Categoria).</h3>
    <h3>Mostre os dados em uma tabela estilizada com cabeçalhos e uma cor diferente para cada categoria.</h3>

    <table>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Categoria</th>
        </tr>

        <?php
            $produtos = [
                ['nome' => 'Smart TV 50" 4K Ultra HD Samsung', 'preco' => 2333.37, 'categoria' => "eletronicos"],
                ['nome' => 'Smartphone Samsung Galaxy A35', 'preco' => 1338.00, 'categoria' => "eletronicos"],
                ['nome' => 'Lavadora de Roupas Brastemp', 'preco' => 1999.00, 'categoria' => "eletrodomesticos"],
                ['nome' => 'Guarda-Roupa Bartira Ville', 'preco' => 799.00, 'categoria' => "moveis"]
            ];

            $cores = [
                    "moveis" => "rgba(240, 103, 103, 0.7)", 
                    "eletronicos" => "rgba(103, 218, 99, 0.57)",
                    "eletrodomesticos" => "rgba(235, 83, 215, 0.68)" 
            ];

            foreach ($produtos as $produto){
                echo "<tr style = 'background-color: ". $cores[$produto['categoria']].";'>
                    <td>" . $produto['nome'] . "</td>
                    <td>" . number_format($produto['preco'], 2, ',', '') . "</td>
                    <td>" . $produto['categoria'] ."</td>
                </tr>";
            }
        ?>

    </table>

</body>
</html>