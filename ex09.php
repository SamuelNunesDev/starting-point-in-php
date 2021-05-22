<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Exercício 09</title>
</head>
<body>
<div>
    <form method="get" action="ex09_01.php">
        Nome: <input type="text" name="nome"/><br/>
        Ano de nascimento: <input type="number" name="ano"><br/>
        <fieldset><legend Sexo></legend>
            <input type="radio" name="sexo" id="masc" value="Masculino" checked/>
            <label for="masc">Masculino</label><br/>
            <input type="radio" name="sexo" id="fem" value="Feminino"/>
            <label for="fem">Feminino</label>
        </fieldset><br/>
        <input type="submit" value="Enviar"/>
    </form>
</div>
</body>
</html>
