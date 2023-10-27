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
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
.marquee {
    width: 10%;
    white-space: nowrap;
    overflow: hidden;
    box-sizing: border-box;
    animation: marquee 20s linear infinite;
    border-radius: 5px;
    margin-bottom: 10px;
}

@keyframes marquee {
    0% {
        transform: translateX(100%);
    }

    100% {
        transform: translateX(-100%);
    }
}
</style>

<body>
    <div class="container-fluid">
        <div class="container-fluid">
            <?php include_once('./../includes/navbar.php') ?>
        </div>
        <nav class="navbar-expand-lg navbar-dark text-dark px-3" style="display: block;">
            <ul class="navbar-nav me-auto py-2 ">
                <?php 
                include_once __DIR__ . '/../includes/navbar_nav.php';
                 ?>
            </ul>
        </nav>
        <div class="row">
            <div class="marquee fw-bold py-3">
                <span><i class="fa-solid fa-tag"></i> Xem Chi Tiết Sản Phẩm!</span>
            </div>
            <h1 class="text-center">CHI TIẾT SẢN PHẨM</h1>
        </div>
        <div class="container">
            <div class="row">
                <?php
                view_details();
                 ?>
            </div>
        </div>
    </div>

    <?php
    include_once ('../includes/footer.php');
     ?>
</body>

</html>