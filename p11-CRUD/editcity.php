<?php require_once("./db_connection.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $id = isset($_GET["id"]) ? $_GET["id"] : false;

    if (!$id) {
        die("ERRO ISTO NAO FUNCIONA SEM ID!");
    }

    $sql = "SELECT * FROM city WHERE ID = ?";

    $statement = mysqli_prepare($mysqli, $sql);
    mysqli_stmt_bind_param($statement, "i", $id);
    mysqli_stmt_execute($statement);
    $result = mysqli_stmt_get_result($statement);

    $city = mysqli_fetch_assoc($result);
    var_dump($city);


    ?>
    <h2>Edit city</h2>
    <form action="editcityhandler.php" method="post" enctype="application/x-www-form-urlencoded">
        <input type="hidden" name="id" placeholder="Id" value="<?= $city["ID"] ?>">
        <br>
        <input type="text" name="name" placeholder="Name" value="<?= $city["Name"] ?>">
        <br>
        <select name="countryCode">
            <?php
            $sql = "SELECT Code, Name FROM country";
            $result = mysqli_query($mysqli, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row["Code"] == $city["CountryCode"]) {
                    echo "<option selected value=\"" . $row["Code"] . "\">" . $row["Name"] . "</option>";
                } else {
                    echo "<option value=\"" . $row["Code"] . "\">" . $row["Name"] . "</option>";
                }
            }
            ?>
        </select>
        <br>
        <input type="text" name="district" placeholder="District" value="<?= $city["District"] ?>">
        <br>
        <input type="number" name="population" placeholder="Population" value="<?= $city["Population"] ?>">
        <br>
        <br>
        <button type="submit">Submitt</button>
    </form>
</body>

</html>