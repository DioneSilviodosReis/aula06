<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referencia</title>
</head>
<body>
    <?php
        $a = 3;
        $b = &$a;
        $b += 5;

        echo "A vale $a";
        echo "</br>B vale $b";
    ?>
    
</body>
</html>