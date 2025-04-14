<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Produtos</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>
    <?php

    $produtos = [
        [
            "nome" => "camiseta",
            "preço" => 29.90,
            "categoria" => "roupas"
        ],
        [
            "nome" => "smartphone",
            "preço" => 2500.00,
            "categoria" => "eletrônicos"
        ],
        [
            "nome" => "geladeira",
            "preço" => 2000.00,
            "categoria" => "eletrodomésticos"
        ],
    ];

    $coresCategoria = [
        "roupas" => "#ADD8E6", 
        "eletrônicos" => "#90EE90",
        "eletrodomésticos" => "#FFC0CB" 
    ];
    ?>

    <h2>Tabela de Produtos</h2>

    <table>
        <tr>
            <th>Nome</th>
            <th>Preço (R$)</th>
            <th>Categoria</th>
        </tr>
        <?php 
            foreach ($produtos as $produto) {
                echo "<tr style='background-color: " . $coresCategoria[$produto['categoria']] . ";'>";
                echo "<td>" . $produto['nome'] . "</td>";
                echo "<td>" . number_format($produto['preço'], 2, ',', '.') . "</td>";
                echo "<td>" . $produto['categoria'] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>