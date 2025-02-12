<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php require_once("db_connection.php"); ?>

    <?php
    if (isset($_POST["name"])) {
        $name = $_POST["name"];
        $countryCode = $_POST["countryCode"];
        $district = $_POST["district"];
        $population = $_POST["population"];

        $sql = "INSERT INTO city VALUES(NULL, ?, ?, ?, ?)";
        $statement = mysqli_prepare($mysqli, $sql);
        mysqli_stmt_bind_param($statement, "sssi", $name, $countryCode, $district, $population);

        $result = mysqli_stmt_execute($statement);

        if ($result) {
            echo "<div>Inserido com sucesso!</div>";
        }
    }
    ?>


    <?php
    $sql = "
        SELECT *
        FROM city
        ORDER BY Id DESC
        LIMIT 20
        ";

    $result = mysqli_query($mysqli, $sql);

    // if (true) {
    // }

    // while (true):

    // endwhile;

    // while (true) {

    // }

    ?>

    <div class="mainContent">
        <div>
            <table class="citiesTable">
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?= $row["ID"] ?></td>
                        <td><?= $row["Name"] ?></td>
                        <td><?= $row["CountryCode"] ?></td>
                        <td><?= $row["District"] ?></td>
                        <td><?= $row["Population"] ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
        <div>
            <form method="post" enctype="application/x-www-form-urlencoded">
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
                <button>Submit</button>
            </form>
        </div>
    </div>


</body>

</html>