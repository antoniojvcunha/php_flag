<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // $fruta = array('peras', 'laranja', 'maçãs');
        $fruta = ['peras', 'laranja', 'maçãs'];

        echo "<ul>";
        for ($i = 0; $i < count($fruta); $i++) {
            echo "<li>$fruta[$i]</li>";
        }
        echo "</ul>";

        $bikes = ['Van rysel', 'Trek', 'Enve', 'Scott', 'Cannondale'];

        $randomPos = rand(0, count($bikes) - 1);
        echo "$randomPos: $bikes[$randomPos]";
        
       
      
        



    ?>





</body>
</html>