<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Exercicio 020</title>
</head>
<body>
<div>
    <?php
        $n = $_GET["num"];
        $c = 0;
        do{
            echo "$n x $c = ".($n*$c)."<br/>";
            $c++;
        }
        while($c<=10);
    ?>
    <br/><a href="ex020.html" class="botao">Voltar</a>
</div>
</body>
</html>
