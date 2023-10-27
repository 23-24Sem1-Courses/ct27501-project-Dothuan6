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
.card .img {
    transition: transform 0.3s ease-in-out !important;
    transition-timing-function: ease !important;
    transition-delay: 0s !important;
}

.card .img:hover {
    transform: translateY(-10px) !important;
}

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
            <div class="marquee fw-bold py-3">
                <span><i class="fa-solid fa-tag"></i> Chào mừng bạn đến với 2T-CAR!</span>
            </div>
            <h3 class="text-center">TẤT CẢ SẢN PHẨM</h3>
        </div>
        <div class="container">
            <div class="row">
                <?php getallProducts() ?>

            </div>
        </div>
    </div>
    <center class='py-5 w-25 m-auto'>
        <nav aria-label='Page navigation example'>
            <ul class='pagination'>
                <li class='page-item'><a class='page-link' href='all_products.php?startRow=0'>Previous</a>
                </li>
                <li class='page-item'><a class='page-link' href='all_products.php?startRow=0'>1</a></li>
                <li class='page-item'><a class='page-link' href='all_products.php?startRow=5'>2</a></li>
                <li class='page-item'><a class='page-link' href='all_products.php?startRow=10'>3</a></li>
                <li class='page-item'><a class='page-link' href='all_products.php?startRow=15'>Next</a></li>
            </ul>
        </nav>
    </center>
    <?php
    include_once ('../includes/footer.php');
    ?>
</body>

</html>