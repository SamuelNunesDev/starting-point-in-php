<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8"/>
    <link href="estilo.css" rel="stylesheet"/>
    <title>Exercício 039</title>
</head>
<body>
<div>
    <?php
        $nome = "Samuel";
        echo str_repeat($nome, 3);
        echo str_replace($nome, "Samuel", "Saulo");
        $vetor = array("a"=>2, "b"=>1, "c"=>2, "d"=>3, "e"=>4);
        var_dump($vetor);
       /* $vetor[] = 5;
        var_dump($vetor);
        array_pop($vetor);
        var_dump($vetor); */
        asort($vetor);
        var_dump($vetor);
    ?>
</div>
</body>
</html>

