<?php
@session_start();
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
            <h1 class="text-center">
                2TShop-CAR
            </h1>
            <!-- slider -->
            <div>
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner" style="border-radius:2px;">
                        <div class=" carousel-item active">
                            <img src="images/slider1.jpg" class="d-block w-100 img_slide" alt="ảnh">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>MECEDES BEN</h5>
                                <a href="all_products.php" class="text-light" style="text-decoration: none;">Xem chi
                                    tiết </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/slider2.webp" class="d-block w-100 img_slide" alt="ảnh">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>SMECEDES BEN</h5>
                                <a href="all_products.php" class="text-light" style="text-decoration: none;">Xem chi
                                    tiết </a>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/slider1.jpg" class="d-block w-100 img_slide" alt="ảnh">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>MECEDES BEN</h5>
                                <a href="all_products.php" class="text-light" style="text-decoration: none;">Xem chi
                                    tiết </a>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/slider2.webp" class="d-block w-100 img_slide" alt="ảnh">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>SMECEDES BEN</h5>
                                <a href="all_products.php" class="text-light" style="text-decoration: none;">Xem chi
                                    tiết </a>

                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="container">
            <section class="product-section mt-3">
                <div class="section-heading py-2">
                    <h3 class="heading px-5">MERCEDES GLC 2023
                        <hr>
                    </h3>
                    <div class="row px-5">

                        <?php
                    getProductsGLC();
                     ?>
                    </div>
                </div>
            </section>
            <section class="product-section mt-3">
                <div class="section-heading py-5">
                    <h3 class="heading px-5">MERCEDES C-CLASS
                        <hr>
                    </h3>
                    <div class="row px-5">
                        <?php getProductsCLASS(); ?>
                    </div>
                </div>
            </section>
            <section class="product-section mt-3">
                <div class="section-heading py-5">
                    <h3 class="heading px-5">MERCEDES MAYBACH
                        <hr>
                    </h3>
                    <div class="row px-5">
                        <?php getProductsMAYBACH(); ?>
                    </div>
                </div>
            </section>
            <section class="product-section mt-3">
                <div class="section-heading py-5">
                    <h3 class="heading px-5">MERCEDES G-CLASS
                        <hr>
                    </h3>
                    <div class="row px-5">
                        <?php getProductsGCLASS(); ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php
    include_once __DIR__ . '/../includes/footer.php';
     ?>
</body>

</html>