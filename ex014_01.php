<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Exercício 014</title>
</head>
<body>
<div>
    <?php
        $dia = isset($_GET["dia"])?$_GET["dia"]:0;
        switch ($dia){
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Hoje tem aula!";
                break;
            case 7:
            case 1:
                echo "Dia de folga!";
                break;
            case 0:
                echo "Não foi informado nenhum dia!";
                break;
            default:
                echo "Dia inexistente!";
        }
    ?>
    <br/><a class="botao" href="ex014.html">Voltar</a>
</div>
</body>
</html>
