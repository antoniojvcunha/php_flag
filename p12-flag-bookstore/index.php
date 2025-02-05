<?php
require_once("./db_connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    ORDER BY:
    <form id="orderForm">
        <select name="order" id="orderSelect">
            <option>default order or whateber</option>
            <option value="author_asc">Author Ascending</option>
            <option value="author_desc">Author Descending</option>
            <option value="title_asc">Title Ascending</option>
            <option value="title_desc">Title Descending</option>
        </select>
        <!-- <button>OK</button> -->
    </form>

    <?php

    $url_order = isset($_GET["order"]) ? $_GET["order"] : null;
    switch ($url_order) {
        case "author_asc":
            $order = "author ASC";
            break;
        case "author_desc":
            $order = "author DESC";
            break;
        case "title_asc":
            $order = "title ASC";
            break;
        case "title_desc":
            $order = "title DESC";
            break;
        default:
            $order = "id ASC";
            break;
    }

    $sql = "
        SELECT books.*, authors.name AS author
        FROM books
        JOIN authors on authors.id = books.author_id
        ORDER BY $order
    ";
    $stmt = mysqli_prepare($mysqli, $sql);
    // var_dump($stmt);
    // $statement = mysqli_stmt_bind_param($stmt, "s", $order_col);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    ?>

    <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <div class="card">
            <p>Author: <?= $row["author"] ?></p>
            <p>Title: <?= $row["title"] ?></p>
        </div>
    <?php endwhile; ?>

    <script>
        const orderForm = document.querySelector("#orderForm");
        const orderSelect = document.querySelector("#orderSelect");
        orderSelect.addEventListener("change", function() {
            // alert(orderSelect.value);
            // window.location = "?order=" + orderSelect.value;
            orderForm.submit();
        });
    </script>
</body>

</html>