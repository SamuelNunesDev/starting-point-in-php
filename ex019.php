<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Exercício 020</title>
</head>
<body>
<div>
    <?php
        $n = $_GET["num"];
        $num = $n;
        $factorial = $n;
        do{
            $factorial *= $n - 1;
            $n--;
        }
        while($n > 1);
        echo "$num! = $factorial"
    ?>
    <br/><a href="ex019.html" class="botao">Voltar</a>
</div>
</body>
</html>
