<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incremento</title>
</head>
<body>
    <div>
        <?php
            $ano = $_GET["ano"]; //Essa linha vai pegar ano na url
            echo "O ano atual é: $ano"; #informacao
            echo "</br> O ano passado era: " . --$ano ; /*exemplo de comentario */
        
        ?>
    </div>
</body>
</html>