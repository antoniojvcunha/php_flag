<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $search = isset($_GET["search"]) ? $_GET["search"] : "";
    ?>

    <form method="GET" action="./index.php">
        <input type="text" placeholder="city name" name="search" value="<?= $search ?>">
        <button type="submit">🔎</button>
    </form>



    <p>search: <?= $search ?></p>

    <?php

    // if (isset($_GET["search"])) {
    //     $search = $_GET["search"];
    // } else {
    //     $search = "";
    // }

    $connection = mysqli_connect("localhost", "root", "", "world", 3306);

    $sql = "
        SELECT * 
        FROM city
        WHERE Name LIKE ?
    ";




    $search = "%$search%";

    $stmt = mysqli_prepare($connection, $sql);
    mysqli_stmt_bind_param($stmt, "s", $search); // a % serve para pesquisar sem ter de escrever a palavra toda
    // esta funçao preenche os pontos de interrogação
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $count = mysqli_num_rows($result);

    if ($count == 0) {
        echo "<div>Não foram encontradas cidades com esse termo.</div>";
    } else if ($count > 1) {
        echo "<div>$count cidades encontradas</div>";
    } else {
        echo "<div>$count cidade encontrada</div>";
    }


    if ($count > 0) {
        echo "<h2>resultados:</h2>";
        // $result = mysqli_query($connection, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div>" . $row["Name"] . "</div>";
        }
    }










    // mostrar o numero de rows retornado pela query
    // se forem 0, mostrar uma mensagem costumizada
    // por exemplo: 5 cidades encontradas
    // por exemplo: nao foram encontradas cidades com esse termo...    
    ?>



</body>

</html>