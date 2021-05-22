<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Exercicio 05</title>
</head>
<body>
<div>
    <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $condicao = $_GET["sum"];
        $resultado = $condicao == 1 ? $n1 + $n2 : $n1 * $n2;
        echo "O resultado da operação foi $resultado";
    ?>
</div>
</body>
</html>

