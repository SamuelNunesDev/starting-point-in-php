<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Exercício 04</title>
</head>
<body>
<div>
    <?php
        $nome = 'Samuel';
        $$nome = 'Saulo';
        echo "A váriavel nome tem o valor $nome e a váriavel da váriavel nome tem valor " . $$nome;
    ?>
</div>
</body>
</html>
