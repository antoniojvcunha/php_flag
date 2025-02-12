<?php require_once("./db_connection.php")  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
    <?php
    // var_dump($_REQUEST);
    // var_dump($_FILES);
    ?>
    </pre>

    <?php
    $name = isset($_POST["name"]) ? $_POST["name"] : "Guest";
    if (isset($_FILES["avatar"])) {
        $avatar = $_FILES["avatar"];
        // var_dump($avatar);
        $tempFile = $avatar["tmp_name"];
        $originalFileName = $avatar["name"];

        $result = move_uploaded_file($tempFile, "./images/teste.jpg");
        echo $result;
    }

    // agora fazer INSERT numa Base de dados
    // do caminho da imagem `./images/teste.jpg` como um VARCHAR normal



    $sql_create = "CREATE TABLE IF NOT EXISTS Images (
    imageID INT AUTO_INCREMENT PRIMARY KEY,
    imagePath VARCHAR(255) NOT NULL)";

    if (!mysqli_query($mysqli, $sql_create)) {
        die("Error creating table: " . mysqli_error($mysqli));
    }

    $imagePath = "./images/teste.jpg";

    $sql_insert = "INSERT INTO Images(imagePath) VALUES (?)";
    $stmt = mysqli_prepare($mysqli, $sql_insert);
    mysqli_stmt_bind_param($stmt, "s", $imagePath);

    $result = mysqli_stmt_execute($stmt);

    // mysqli_stmt_bind_param($statement, "sssi", $name, $countryCode, $district, $population);


    ?>
</body>

</html>