<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <link href="estilo.css" rel="stylesheet"/>
    <title>Exercício 030</title>
</head>
<body>
<div>
    <?php
        $txt = "Grande string a ser gerada para ser exemplificado o funcionamento da função wordwrap.";
        $texto = wordwrap($txt, 10, "<br/>", false);
        echo $texto;
    ?>
</div>
</body>
</html>

