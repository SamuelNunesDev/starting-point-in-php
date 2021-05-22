<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Exercício 012</title>
    <style>
        span.txt{
            color: #01ce10;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div>
    <?php
        $n1 = ($_GET["n1"] != '')?$_GET["n1"]:-1;
        $n2 = ($_GET["n2"] != '')?$_GET["n2"]:-1;
        if ($n1 != -1 && $n2 != -1) {
            $media = ($n1 + $n2) / 2;
            echo "A média do aluno foi: <span class='txt'>$media</span>";
            if ($media < 5) {
                echo "<br/>Situação: <span class='txt'>Reprovado!</span>";
            } elseif ($media < 7) {
                echo "<br/>Situação: <span class='txt'>Recuperação!</span>";
            } elseif ($media <= 10) {
                echo "<br/>Situação: <span class='txt'>Aprovado!</span>";
            }
        }
        else{
            echo "<br/><span style='color: #920808; font-weight: bold;'>
                    Valores informados inválidos! Tente novamente!</span>";
        }
    ?>
    <br/><a href="ex012.html">Voltar</a>
</div>
</body>
</html>
