<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <link href="estilo.css" rel="stylesheet"/>
    <title>Exercício 35</title>
</head>
<body>
<div>
    <?php
        $nome = 'Samuel Nunes de Souza';
        echo "Seu nome é: ".strtolower($nome); // deixa todas as letras em minusculas similar ao .lower
        echo "<br/>Seu nome é: ".strtoupper($nome); // deixa todas as letras em maiusculas similar ao .upper
        echo "<br/>Seu nome é: ".ucfirst($nome); /* deixa a primeira letra em maiuscula e deixa as demais no seu estado
                                                     atual.*/
        echo "<br/>Seu nome é: ".ucwords($nome); /* deixa a primeira letra de cada palavra em maiuscula, as demais
                                                    letras são mantidas no seu estado atual. */
    ?>
</div>
</body>
</html>
