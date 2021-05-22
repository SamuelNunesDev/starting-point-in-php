<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Funções Aritiméticas</title>
    <style>
        h1{
            font: 25pt "Times New Roman";
            color: rgba(243, 11, 11, 0.71);
            font-weight: bold;
        }
    </style>
</head>
<body>
<div>
    <?php
        $n1 = $_GET["x"];
        $n2 = $_GET["y"];
        echo "<h1>Valores recebidos: $n1 e $n2</h1>";
        echo "<br/>O valor absoluto de $n1 é igual a " . abs($n1);
        echo "<br/>A potenciação de $n1<sup>$n2</sup> = " . pow($n1, $n2);
        echo "<br/>A raiz quadrada de $n1 é igual a " . sqrt($n1);
        echo "<br/>O número $n1 arrendondado é igual a " . round($n1);
        echo "<br/>O número $n1 arrendondado pra cima é igual a " . ceil($n1);
        echo "<br/>O número $n1 arrendondado pra baixo é igual a " . floor($n1);
        echo "<br/>A parte inteira de $n1 é igual a " . intval($n1);
        echo "<br/>O valor de $n1 em moeda é R$" . number_format($n1, 2, ",", ".");
    ?>
</div>
</body>
</html>
