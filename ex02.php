<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="estilo.css">
    <title>Exercício 02</title>
</head>
<body>
<div>
    <?php
        $anoatual = $_GET["a"];
        echo "O ano anterior de $anoatual foi " . (--$anoatual);
    ?>
</div>
</body>
</html>
