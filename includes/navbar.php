<?php 
include_once ('header.php');
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">2TShop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Trang Chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="all_products.php">Sản Phẩm</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Tài Khoản
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../views/user_areas/user_profile.php"><i
                                    class="fa-solid fa-user"></i> Tài Khoản</a></li>
                        <li><a class="dropdown-item" href="../views/user_areas/user_reg.php">Đăng Ký</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="../views/user_areas/user_login.php">Đăng Nhập</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Tìm sản phẩm..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i
                        class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
</nav>