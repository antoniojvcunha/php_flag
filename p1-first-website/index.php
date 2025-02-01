<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HELLO WORLD!</h1>

    <?php
        $name = "Antonio Cunha";

        echo '<p>Ola meu caro amigo ' . $name . '<p>';

        echo "<p>Ola meu caro amigo $name<p>";

        $number = rand(0, 10);
        echo "Numero da sorte: $number";

        $name = $_GET["name"];
        $age = $_GET["age"];
        $gender = $_GET["gender"];

        echo "<p>Name: $name; Idade: $age; Gênero:$gender<p>";

    ?>



</body>
</html>