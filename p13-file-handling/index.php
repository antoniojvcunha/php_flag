<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    //echo "hello";
    //$fileContent =  readfile("./lorem.txt");

    $name = isset($_GET['name']) ? $_GET['name'] : "no name provided";

    // /*     echo "Thank you, $name!";
    //  */

    // $loremFile = fopen("./lorem.txt", "a+"); //open file

    // $content = fread($loremFile, filesize("./lorem.txt")); //read file content

    // fwrite($loremFile, "Ola isto é um teste\n"); //write content to file

    // fclose($loremFile); //close file


    $namesFile = fopen("./lorem.txt", "a+"); //open file
    fwrite($namesFile, $name . "\n"); //write content to file

    echo $namesFile
    ?>
</body>

</html>