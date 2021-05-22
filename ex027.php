<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Exercício 027</title>
</head>
<body>
<div>
    <?php
        function teste(&$x){
            $x += 2;
            echo "O valor de X é $x <br/>";
        }

        $a = 3;
        teste($a);
        echo "O valor de A é $a";
    ?>
</div>
</body>
</html>
