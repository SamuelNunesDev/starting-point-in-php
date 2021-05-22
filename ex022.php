<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Exercicio 022</title>
</head>
<body>
<div>
    <form method="get" action="ex022_1.php">
        Número: <select name="num" value="1">
            <?php
                for($c=0;$c<=10;$c++){
                    echo "<option value=$c>$c</option>";
                }
            ?>
        </select>
        <input type="submit" value="Tabuada">
    </form>
</div>
</body>
</html>
