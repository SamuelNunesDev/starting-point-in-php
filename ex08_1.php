<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Exercício 08</title>
</head>
<body>
<div>
    <?php
        $raiz = $_GET["v"];
        echo "O valor enviado foi $raiz e sua raiz quadrada é ".number_format(sqrt($raiz),"2");
    ?>
</div>
</body>
</html>
