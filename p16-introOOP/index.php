<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once("./Student.php");

    $s1 = new Student(1, "Tojo", "1998-04-07");
    $s2 = new Student(2, "Zack", "1982-06-17");
    $s3 = new Student(3, "Rachel", "1978-10-02");

    // $s1->id = 1;
    // $s1->name = "Tojo";
    // $s1->birthdate = "1998-04-07";

    // $s2->id = 2;
    // $s2->name = "Zack";
    // $s2->birthdate = "1982-06-17";

    // $s3->id = 3;
    // $s3->name = "Rachel";
    // $s3->birthdate = "1978-10-02";

    var_dump($s1);
    echo "<br>";
    var_dump($s2);
    echo "<br>";
    var_dump($s3);

    echo "<br>";
    $s1->greeting();
    echo "<br>";
    $s2->greeting();
    echo "<br>";
    $s3->greeting();
    ?>
</body>

</html>