<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Exercício 013</title>
</head>
<body>
<div>
    <?php
        $n = ($_GET["n"] != '')?$_GET["n"]:0;
        $op = $_GET["op"];
        switch ($op){
            case 1:
                echo "O dobro do número $n é ".($n*2);
                break;
            case 2:
                echo "O número $n elevado ao cubo é ".($n**3);
                break;
            case 3:
                echo "A raiz quadrada de $n é ".sqrt($n);
        }
    ?>
    <br/><a href="ex013.html" class="botao">Voltar</a>
</div>
</body>
</html>
