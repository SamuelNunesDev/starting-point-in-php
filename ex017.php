<!DOCTYPE html>
<html lan="pt-BR">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Exercício 017</title>
</head>
<body>
<div>
    <?php
        $inicio = isset($_GET["inicio"])?$_GET["inicio"]:0;
        $fim = isset($_GET["fim"])?$_GET["fim"]:0;
        $incremento = isset($_GET["incremento"])?$_GET["incremento"]:1;
        if ($inicio < $fim) {
            while ($inicio <= $fim) {
                echo " $inicio ";
                $inicio += $incremento;
            }
        }
        else{
            while ($inicio >= $fim){
                echo " $inicio ";
                $inicio -= $incremento;
            }
        }
    ?>
    <br/><a class="botao" href="ex017.html">Voltar</a>
</div>
</body>
<html/>