<?php require_once("./db_connection.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <a href="newcity.php">New City</a>
    <br>
    <br>
    <table class="citiesTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Country Code</th>
                <th>District</th>
                <th>Population</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM city ORDER BY ID DESC";
            $result = mysqli_query($mysqli, $sql);
            while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?= $row["ID"] ?></td>
                    <td><?= $row["Name"] ?></td>
                    <td><?= $row["CountryCode"] ?></td>
                    <td><?= $row["District"] ?></td>
                    <td><?= $row["Population"] ?></td>
                    <td><a href="editcity.php?id=<?= $row["ID"] ?>">✏️</a><a href="deletecity.php?id=<?= $row["ID"] ?>">🗑️</a></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>

</html>