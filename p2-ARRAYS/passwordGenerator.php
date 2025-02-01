<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        // $teste = "Bom dia a todos!";

        // echo $teste[2];

        $sample = "abcdefghijkrstuvwxyz123456789";

        $password = "";
        for ($i = 0; $i < 7; $i++) {
            $randomPos = rand(0, strlen($sample) -1);
            $password .= $sample[$randomPos];
        }

        echo "$password";
        

        // $randomPos = rand(0, strlen($sample) - 1);
        // echo "$randomPos: " . $sample[$randomPos]";




    ?>




</body>
</html>