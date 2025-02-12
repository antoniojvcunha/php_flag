<?php require_once("./db_connection.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="handleUpload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="avatar">
        <input name="name">
        <button>Submit</button>
    </form>
</body>

</html>