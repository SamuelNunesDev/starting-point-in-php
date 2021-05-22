<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Exercício 07</title>
</head>
<body>
<div>
    <?php
        $ano_nascimento = $_GET["ano"];
        $idade = 2021 - $ano_nascimento;
        echo "A pessoa tem $idade anos de idade e o voto ".(18 <= $idade && $idade <= 65?"é obrigatório!":"não é 
        obrigatório!");
    ?>
</div>
</body>
</html>

