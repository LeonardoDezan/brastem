<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form method="Post" action="<?php echo URL_BASE . "calculadora/somar" ?>" >
        Valor de a:<input type="text" name="a">
        Valor de b:<input type="text" name="b">
        <input type="submit" value="enviar">
    </form>
    <br>
    <b>O resultado é: </b>
    
</body>
</html>