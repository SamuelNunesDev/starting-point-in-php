<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Exercício 011</title>
</head>
<body>
<div>
    <?php
        $idade = isset($_GET["ano"])?$_GET["ano"]:"0";
        $idade = ($idade != 0)?(date("Y") - $idade):"0";
        if ($idade >= 16 && $idade < 18){
            echo "A pessoa informada possui $idade anos e já pode votar porém ainda não pode dirigir!";
        }
        elseif ($idade >= 18){
            echo "A pessoa informada possui $idade anos e já pode votar e dirigir!";
        }
        elseif ($idade == 0){
            echo "Não foi informado o ano de nascimento!";
        }
        else{
            echo "A pessoa informada possui $idade anos e ainda não pode votar e nem dirigir!";
        }
    ?> <br/>
    <a href="ex011.html">Voltar</a>
</div>
</body>
</html>
