<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExercicioB</title>
    <style>
        table, th, tr, td {border: 1px solid black;}
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
            <th>...</th>
        </tr>

        <?php
            $produtos = [
                ['nome' => 'ProdutoA', 'preco' => 0],
                ['nome' => 'ProdutoB', 'preco' => 0],
                ['nome' => 'ProdutoC', 'preco' => 0]
            ];

            foreach ($produtos as $produto){
                echo "<tr>
                    <th>{$produto['nome']}</th>
                    <th>{$produto['preco']}</th>
                </tr>";
            }
        ?>

    </table>

</body>
</html>