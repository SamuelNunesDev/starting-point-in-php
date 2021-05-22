<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Exercício 036</title>
</head>
<body>
<div>
    <?php
        $nome = "Samuel Nunes de Souza";
        echo "O nome Souza foi encontrado na posição ".strpos($nome, "Souza"); /* retorna o numero da posição do
                                                                                        caractere ou palavra procurada
                                                                                        similar ao .index do python.*/
        echo "<br/>";
        echo "O nome souza foi encontrado na posição ".stripos($nome, "souza"); /* retorna o numero da posição do
                                                                                        caractere ou palavra procurada
                                                                                        ignorando se as letras estão em
                                                                                        maiusculas ou minusculas
                                                                                        similar ao .index do python.*/
        echo "<br/>O nome nunes foi encontrado ".substr_count($nome, "Nunes")." vezes"; /* retorna a quantidade
                                                                                                 de vezes que apareceu o
                                                                                                 caractere ou a palavra
                                                                                                 procurada. */
    ?>
</div>
</body>
</html>

