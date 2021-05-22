<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Exercício 03</title>
</head>
<body>
<div>
    <?php
        $a = 5;
        $b = &$a;
        $a++;
        echo "A variável 'A' vale $a <br/>A variável 'B' vale $b";
    ?>
</div>
</body>
</html>

