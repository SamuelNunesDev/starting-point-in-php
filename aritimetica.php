<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Operações Aritiméticas</title>
</head>
<body>
<div>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h1>Valores recebidos: $n1 e $n2</h1>";
        $media = ($n1 + $n2) / 2;
        echo "A soma entre $n1 e $n2 vale ".($n1 + $n2)."<br/>A subtração entre $n1 e $n2 vale ".($n1 - $n2).
            "<br/>A divisão entre $n1 e $n2 vale ". ($n1 / $n2)."<br/>A multiplicação entre $n1 e $n2 vale ".
            ($n1 * $n2)."<br/>O módulo de $n1 por $n2 vale ".($n1 % $n2)."<br/>A média entre $n1 e $n2 vale ".
            (($n1 + $n2) / 2);
    ?>
</div>
</body>
</html>
