<?php
session_start();
include_once __DIR__ . '/controllers/function.php';
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="container-fluid">
            <?php include_once('./../includes/navbar.php') ?>
        </div>
        <!-- second child -->
        <nav class="navbar-expand-lg navbar-dark text-dark px-3" style="display: block;">
            <ul class="navbar-nav me-auto py-2 ">
                <?php 
                include_once __DIR__ . '/../includes/navbar_nav.php';
                ?>
            </ul>
        </nav>
        <!--  -->
        <div class="row">
            <h3 class="text-center">SẢN PHẨM TÌM KIẾM</h3>
        </div>
        <div class="container">
            <div class="row">
                <?php search_products() ?>

            </div>
        </div>
    </div>
    <?php
    include_once ('../includes/footer.php');
     ?>
</body>

</html>