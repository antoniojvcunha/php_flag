<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <?php


    echo "<div style='background-color:white'>";
    $nome = $_GET["nome"];
    $sobrenome = $_GET["sobrenome"];
    echo "É um prazer te conhecer $nome $sobrenome";
    echo "</div>";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
</body>

</html>