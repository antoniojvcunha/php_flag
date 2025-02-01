<?php
require_once("./db_connection.php");

// $id = isset($_POST["id"]) ? $_POST["id"] : false;
// $name = isset($_POST["name"]) ? $_POST["name"] : false;
// $countryCode = isset($_POST["countryCode"]) ? $_POST["countryCode"] : false;
// $district = isset($_POST["district"]) ? $_POST["district"] : false;
// $population = isset($_POST["population"]) ? $_POST["population"] : false;

// // echo "$id<br><br>";
// // echo "$name<br><br>";
// // echo "$countryCode<br><br>";
// // echo "$district<br><br>";
// // echo "$population<br><br>";

// // // EXECUTAR A QUERY DE UPDATE
// // // VOLTAR PARA O INDEX QUANDO TUCO CORRE BEM...

if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $countryCode = $_POST["countryCode"];
    $district = $_POST["district"];
    $population = $_POST["population"];

$sql = "UPDATE city SET
        Name = ?, 
        CountryCode = ?, 
        District = ?, 
        Population = ? 
        WHERE ID = ?";

$statement = mysqli_prepare($mysqli, $sql);
mysqli_stmt_bind_param($statement, "sssii", $name, $countryCode, $district, $population, $id);

$result = mysqli_stmt_execute($statement);

if ($result) {
    header("Location: index.php");
} else {
    die("ERROR ao inserir");
}
} else {
    die("ID não fornecido!");
}
    