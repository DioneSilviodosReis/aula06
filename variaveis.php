<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis de variaveis</title>
</head>
<body>
    <?php
        $x = "ABC";
        $$x = "def";
        
        echo "Conteudo de $x";
        echo "</br>Conteudo de ". $ABC;
    ?>
</body>
</html>