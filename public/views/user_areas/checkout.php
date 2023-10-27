<?php
@session_start();
include_once __DIR__ . '/../../../includes/db_connect.php';
include_once __DIR__ .'/../../../public/controllers/function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết giỏ hàng</title>
    <style>
    .cart_img {
        width: 100px !important;
        border-radius: 10px;
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="container-fluid">
            <!-- navbar -->
            <?php
            include_once __DIR__ .  '/../../../includes/header.php';
            include_once ('./includes/navbar.php');
            ?>
            <h3 class="text-center py-3">Chi tiết giỏ hàng</h3>
            <div class="container">
                <div class="row">
                    <?php 
        if(!isset($_SESSION['username'])){
            include_once('./user_login.php');
        }else{
            include_once('./payment.php');
        }
        ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>