<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $mysqli = mysqli_connect("localhost", "root", "", "world", "3306");

    $sql = "SELECT * FROM city";

    $result = mysqli_query($mysqli, $sql);

    $exportFile = fopen("./city_export.csv", "w");

    ?>

    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Country Code</th>
            <th>District</th>
            <th>Population</th> <!-- adicionar aqui os outros dados desejados -->
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)):
            $csvLine = $row['ID'] . ',' . $row['Name'] . ',' . $row['CountryCode'] . ',' . $row['District'] . ',' . $row['Population'] . "\n";

            fwrite($exportFile, $csvLine);
        ?>
            <tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['CountryCode']; ?></td>
                <td><?php echo $row['District']; ?></td>
                <td><?php echo $row['Population']; ?></td>
            </tr>

            <!-- 
            unlink(); apagar um arquivo
            copy(); copiar um arquivo
            rename(); renomear um arquivo/ mover um arquivo
            mkdir(); criar um diretório
            rmdir(); apagar um diretório (vazio)
            -->

        <?php endwhile; ?>
    </table>
</body>

</html>