<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once('./Rectangle.php');
    require_once('./Circle.php');

    $r1 = new Rectangle(10, 5);
    echo $r1->detailString();

    // TPC
    // criar uma classe para circle
    // com circunference e area

    $c1 = new Circle(7, pi());
    echo $c1->detailStringCircle();
    ?>
</body>

</html>