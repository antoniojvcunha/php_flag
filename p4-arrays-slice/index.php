<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <?php

    $colors = ["red", "green", "blue", "yellow", "pink"];


    $colors1 = array_slice($colors, 0, 2);
    $colors2 = array_slice($colors, 2);



    echo "<pre>";
    var_dump($colors1);
    echo "</pre>";


    // Exercise 2
    // voltar a juntar os 2 arrays num so

    $result = array_merge($colors1, $colors2);

    echo "<pre>";
    var_dump($result);
    echo "</pre>";


    // Exercise 3
    // colocar um valor novo na posiçao 2



    ?>

</body>

</html>