<?php

// 1.Inclusão do arquivo de conexão

require_once("./db_connection.php");

// $name = isset($_POST["name"]) ? $_POST["name"] : false;
// $countryCode = isset($_POST["countryCode"]) ? $_POST["countryCode"] : false;
// $district = isset($_POST["district"]) ? $_POST["district"] : false;
// $population = isset($_POST["population"]) ? $_POST["population"] : false;

// 2. Verificação e obtenção de dados do formulário

if (isset($_POST["name"])) {
    $name = $_POST["name"];
    $countryCode = $_POST["countryCode"];
    $district = $_POST["district"];
    $population = $_POST["population"];

    // 3. Inserção no banco de dados com prepared statements

    $sql = "INSERT INTO city VALUES(NULL, ?, ?, ?, ?)";
    $statement = mysqli_prepare($mysqli, $sql);
    mysqli_stmt_bind_param($statement, "sssi", $name, $countryCode, $district, $population);

    // 4. Execução e redirecionamento

    $result = mysqli_stmt_execute($statement);

    if ($result) {
        header("Location: index.php");
    } else {
        die("Error ao inserir");
    }

    // 5. Tratamento de erro

} else {
    die("Error ao inserir");
}
