<?php

$name = "Geoge R. R. Martin";
$birthdate = "1962-04-12";
$is_active = false;

$mysqli = mysqli_connect("127.0.0.1", "root", "12345678", "flag_bookstore", 3306);
$sql = "
    INSERT INTO authors (name, birthdate, is_active) VALUES (?, ?, ?)
";

$statement = mysqli_prepare($mysqli, $sql);
mysqli_stmt_bind_param($statement, "ssis", $name, $birthdate, $is_active, $cat);

$result = mysqli_stmt_execute($statement);
echo $result;
