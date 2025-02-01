<?php

require_once("./db_connection.php");

$id = isset($_GET["ID"]) ? $_GET["ID"] : false;

if (!$id) {
    echo "erro isto nao funciona sem id!";
    die();
}

echo "vamos la apagar o ID $id";

$sql = "DELETE FROM city WHERE ID = ?";

$statement = mysqli_prepare($mysqli, $sql);
mysqli_stmt_bind_param($statement, "i", $id);

$result = mysqli_stmt_execute($statement);

if ($result) {
    header("Location: index.php") ;
} else {
    die("ERROR ao apagar!");
}
