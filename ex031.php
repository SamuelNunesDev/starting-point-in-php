<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Exercício 031</title>
</head>
<body>
<div>
    <?php
        $string = "  Samuel   ";
        echo strlen($string)."<br/>"; // len de strings
        echo $string."<br/>";
        echo trim($string)."<br/>"; // similar ao strip do python, considere rtrim e ltrim (left, right).
        echo strlen(trim($string));
    ?>
</div>
</body>
</html>

