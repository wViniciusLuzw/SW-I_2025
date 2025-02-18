<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex03 - PHP</title>
</head>
<body>
    <?php
        $name = "Fulano";
    ?>
    <p>Oi meu nome é: <?php echo $name; ?></p> 
    <p>Oi meu nome é: <?php echo "$name"; ?></p>
    <?php echo "<p>Meu nome é: $name</p>"; ?>
    <p><?php echo "Meu nome é: " . $name; ?></p>
    <?php echo "<p>Meu nome é: " . $name . "</p>"; ?>

    <?php echo "$nome"; ?>

    poseudovariáveis:
    $_
    $_COOKIE
    $_ENV
    $_FILES

    <?php define("vanin", 10);
    echo vanin; ?>
</body>
</html>