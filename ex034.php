<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Exercício 034</title>
</head>
<body>
<div>
    <?php
        #funcionamento da função str_split

        $string = "Ola, Mundo!";
        $v = str_split($string);
        print_r($v);

        #funcionamento da função implode ou join

        $vetor[0] = "<br/>ola";
        $vetor[1] = "mundo";
        $implode = implode(' ', $vetor);
        echo $implode;

        #funcionamento das funções chr e ord

        $letra = chr(67);
        $cod = ord("C");
        echo "<br/>A letra $letra tem o código $cod";

        ?>
</div>
</body>
</html>

