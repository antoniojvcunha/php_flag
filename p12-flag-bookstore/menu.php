<?php

$menu = [
    "index.php" => "🏠",
    "books.php" => "Books",
];
?>

<div>
    <nav>
        <?php
        $first = true;
        foreach ($menu as $key => $value) {
            if (!$first) {
                echo "|";
            }
            $first = false;

            $showingClass = "";
            if ($key == basename($_SERVER["PHP_SELF"])) {
                $showingClass = 'class="showing"';
            }
            echo "<a href=\"$key\" $showingClass>$value</a>";
        }
        ?>
    </nav>
</div>