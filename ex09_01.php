<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Exercício 09</title>
</head>
<body>
<div>
    <?php
        $nome = isset($_GET["nome"])?$_GET["nome"]:"não foi informado";
        $idade = isset($_GET["ano"])?$_GET["ano"]:"não foi informado";
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"não foi informado";
        echo "$nome é do sexo $sexo e tem $idade anos de idade!";
    ?>
    <a href="ex09.php">Voltar</a>
</div>
</body>
</html>
