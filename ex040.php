<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Teste</title>
</head>
<body>
<div>
    <?php
        function f($v, $n){
            if($n <= 0) return 1;
            else
            return $v[$n-1]*f($v, $n-2)+1;
        }
        $a = array(0, 1,2,3,4);
        print (f($a, 4));

    ?>
</div>
</body>
</html>
