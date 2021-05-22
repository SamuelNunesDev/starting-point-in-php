<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Exercício 01</title>
</head>
<body>
<div>
    <?php
        $preco = $_GET["p"];
        $preco_com_aumento = $preco + $preco * 10 / 100;
        echo "O preço R$" . number_format($preco, 2, ",", ".") . " aplicado 10% de
         aumento vale R$" . number_format($preco_com_aumento, 2, ",", ".");
    ?>
</div>
</body>
</html>
