<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php
        $txt = isset($_GET["txt"])?$_GET["txt"]:"None";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"black";
    ?>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Exercicio 10</title>
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
<div>

    <?php
        echo "<span class='texto'>Texto digitado: $txt<span/>";
    ?>
</div>
</body>
</html>
