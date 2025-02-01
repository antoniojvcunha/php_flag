<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $connection = mysqli_connect("localhost", "root", "", "world", 3306);

    $slq = "SELECT * FROM country";

    $result = mysqli_query($connection, $slq);

    echo "hello ze bartolo";


    echo "<table border='1' cellpading='1' cellspacing='1'>";
    while ($row = mysqli_fetch_assoc($result)) {

        // echo "<pre>";
        // var_dump($row);
        // echo "</pre>";

        echo "<tr>";
        echo "<td>" . $row["Code"] . "</td>";
        echo "<td>" . $row["Name"] . "</td>";
        echo "<td>" . $row["Continent"] . "</td>";
    }
    echo "<table>";




    ?>

</body>

</html>