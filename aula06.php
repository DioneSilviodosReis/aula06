<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $preco = $_GET["p"];
        $preco += ($preco * 0.10); 
        echo "O preço do produto é R$ $preco";
    ?>
</body>
</html>