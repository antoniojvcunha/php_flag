<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    $connection = mysqli_connect("localhost", "root", "", "world", "3306");

    $continent = $_GET["continent"];

    // WARNING: this opens the page to a SQL injection
    // use SQL QUERY parameters instead
    $sql = "SELECT * FROM country WHERE continent = '$continent'";

    $result = mysqli_query($connection, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div>" . $row["Name"] . "</div>";
    }
    ?>


</body>

</html>