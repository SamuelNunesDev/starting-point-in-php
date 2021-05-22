<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Exercício 021</title>
</head>
<body>
<div>
    <?php
        for($c=0;$c<=10;$c++){
            echo "$c ";
        }
        echo "<br/>";
        for($c=10; $c>=0;$c--){
            echo "$c ";
        }
        echo "<br/>";
        for($c=0;$c<=100;$c+=10){
            echo "$c ";
        }
    ?>
</div>
</body>
</html>
