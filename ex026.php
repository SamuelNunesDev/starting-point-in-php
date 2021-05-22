<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Exercício 024</title>
</head>
<body>
<div>
    <?php
    function soma(){
        $p = func_get_args();
        $i = func_num_args();
        $s = 0;
        for($c=0;$c<$i;$c++){
            $s += $p[$c];
        }
        return $s;
    }

    $r = soma(5, 1, 5, 3, 2, 1, 3);
    echo "A soma resultou em $r";
    ?>
</div>
</body>
</html>
