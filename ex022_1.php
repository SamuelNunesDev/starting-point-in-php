<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Exercicio 022</title>
</head>
<body>
<div>
    <?php
        $n = $_GET["num"];
        for ($c=0;$c<=10;$c++){
            echo "$n x $c = ".($n*$c)."<br/>";
        }
    ?>
    <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
