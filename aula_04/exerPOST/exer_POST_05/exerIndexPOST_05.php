<h3>Crie um formulário onde o usuário seleciona uma cor em um input color e que altere a
    cor de fundo da página. Utilize a escala de cores a seguir</h3>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exerPost_03</title>
</head>

<?php
    $cor = $_POST['cxcor']
?>

<body style="background-color: <?php echo "$cor" ?>;">
    <form method="post">
        <h1>Escolha uma cor</h1>
        <p>Color: <input type="color" name="cxcor" id="" required> </p>
        <input type="submit" value="Enviar">
    </form>
</body>


</html>