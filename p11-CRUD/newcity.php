<?php require_once("./db_connection.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>New city</h2>
    <form action="newcityhandler.php" method="post" enctype="application/x-www-form-urlencoded">
        <input type="text" name="name" placeholder="Name">
        <br>
        <select name="countryCode">
            <?php
            $sql = "SELECT Code, Name FROM country";
            $result = mysqli_query($mysqli, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value=\"" . $row["Code"] . "\">" . $row["Name"] . "</option>";
            }
            ?>
        </select>
        <br>
        <input type="text" name="district" placeholder="District">
        <br>
        <input type="number" name="population" placeholder="Population">
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>