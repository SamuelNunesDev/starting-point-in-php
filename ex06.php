<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Exercício 06</title>
</head>
<body>
<div>
    <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        echo "O aluno foi ".(($n1+$n2)/2 >= 7?"Aprovado!":"Reprovado!");
    ?>
</div>
</body>
</html>

