<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // TPC
    // criar a lista de links de continents dinamicamente
    // usando um SELECT a tabela countries

    // Hint: SELECT DISTINCT ...

    $continent = $_GET["continent"];

    $connection = mysqli_connect("localhost", "root", "", "world", 3306);

    $sql = "SELECT DISTINCT continent FROM country ORDER BY CONCAT(continent) ASC"; // O CONCAT SERVE PARA ORDERNAR ALFABETICAMENTE

    $result = mysqli_query($connection, $sql);


    while ($row = mysqli_fetch_assoc($result)) {

        echo "<li>";
        echo "<a href=\"countries.php?continent=" . urlencode($row["continent"]) . "\">" . $row["continent"] . "</a>";
        echo "</li>";
    }


    ?>




    <!-- $connection = mysqli_connect("localhost", "root", "", "world", "3306");

    $continent = $_GET["continent"];

    // WARNING: this opens the page to a SQL injection
    // use SQL QUERY parameters instead
    $sql = "SELECT * FROM country WHERE continent = '$continent'";

    $result = mysqli_query($connection, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div>" . $row["Name"] . "</div>";
    }
    ?> -->

    <!-- <h1>Continents:</h1>
    <ul>
        <li><a href="countries.php?continent=europe">Europe</a></li>
        <li><a href="countries.php?continent=asia">Asia</a></li>
        <li><a href="countries.php?continent=north america">North America</a></li>
        <li><a href="countries.php?continent=south america">South America</a></li>
        <li><a href="countries.php?continent=africa">Africa</a></li>
        <li><a href="countries.php?continent=oceania">Oceania</a></li>
        <li><a href="countries.php?continent=antarctica">Antarctica</a></li>
    </ul> -->
</body>

</html>