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