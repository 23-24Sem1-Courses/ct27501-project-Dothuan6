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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
.marquee {
    width: 10%;
    white-space: nowrap;
    overflow: hidden;
    box-sizing: border-box;
    animation: marquee 20s linear infinite;
    background-image: linear-gradient(to right, rgb(242, 112, 156), rgb(255, 148, 114));
    /* background-image: linear-gradient(109.6deg, rgba(156, 252, 248, 1) 11.2%, rgba(110, 123, 251, 1) 91.1%); */
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
  if(isset($_SESSION['username'])){
    echo "<li class='nav-item p-0'>
          <a class='nav-link text-dark p-1' href='index.php'>Xin chào {$_SESSION['username']} &rang;</a>
          </li>";
  }else{
    echo "<li class='nav-item'>
    <a class='nav-link text-dark' href='index.php'><i class='fa-regular fa-user'></i> </a>
    </li>";
  }
  if(isset($_SESSION['username'])){
    echo "
    <li class='nav-item'>
           <a class='nav-link text-dark p-1' href='./views/user_areas/user_logout.php'>Đăng xuất</a>
    </li>";
  }else{
    echo "
    <li class='nav-item'>
           <a class='nav-link text-dark px-1' href='./views/user_areas/user_login.php'> Đăng nhập</a>
    </li>";
  }
  ?>
            </ul>
        </nav>
        <!--  -->
        <div class="row">
            <div class="marquee fw-bold py-3">
                <span><i class="fa-solid fa-tag"></i> Xem Chi Tiết Sản Phẩm!</span>
            </div>
            <h1 class="text-center">CHI TIẾT SẢN PHẨM</h1>
            <!-- slider -->
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