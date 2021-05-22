<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Exercício 023</title>
</head>
<body>
<div>
    <?php
        $num = $_GET["num"];
        for($c=2;$c<=$num;$c++){
            if($c == $num){
                echo "<span class='foco'>$num é um número primo!</span>";
            }
            elseif ($num % $c == 0){
                echo "<span class='foco'>$num não é um número primo!</span>";
                break;
            }
        }
    ?>
    <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
