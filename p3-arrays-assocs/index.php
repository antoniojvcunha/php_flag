<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $colors = ["blue", "red", "green", "yellow", "#D3EF12"];

    $book = [
        "chave" => "valor",
        "key" => "value",
        "author" => "J R R Tolkien",
        "title" => "Fellowship of the Ring",
        "chapters" => [
            "chapter 1: The Shire",
            "chapter 2: Put of the shire",
            "chapter 3: Done"
        ]
    ];

    $book["isbn"] = "1234";

    $book["chapters"][] = "chapter 4 : blablabla"; //adicionar um valor ao array ja feito. 
    //Funciona como o push do javascript. 
    // Adiciona no final do array.

    echo $book["chapters"][3];
    ?>

</body>

</html>