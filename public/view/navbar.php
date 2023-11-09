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
                    <a class="nav-link" href="index.php?act=all_products">Sản Phẩm</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Tài Khoản
                    </a>
                    <ul class="dropdown-menu">
                        <li> <?php
                        if(!isset($_SESSION['username'])){
                            echo "<a class='dropdown-item' href='user_reg.php'>Đăng Ký</a>";
                        }else{
                            echo "<a class='dropdown-item' href='user_profile.php'><i
                            class='fa-solid fa-user'></i> Tài Khoản</a>";
                        }
                        ?></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><?php if(!isset($_SESSION['username'])){
                            echo "<a class='dropdown-item' href='user_login.php'>Đăng Nhập</a>";
                        } ?></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?act=contact">Liên Hệ</a>
                </li>
                <li class='nav-item'>
                    <a href="index.php?act=cart" class='nav-link text-dark'>
                        <i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item() ?><sup></a>

                </li>
                <?php
                add_cart(); 
                 ?>
            </ul>
            <form class="d-flex" role="search" action="search_products.php?act=search_products" method="get">
                <input class="form-control me-2" name="search_data" type="search" placeholder="Tìm sản phẩm..."
                    aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i
                        class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
</nav>
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
           <a class='nav-link text-dark p-1' href='index.php?act=user_logout'>Đăng xuất</a>
    </li>";
  }else{
    echo "
    <li class='nav-item'>
           <a class='nav-link text-dark px-1' href='user_login.php'> Đăng nhập</a>
    </li>";
  } 
?>
    </ul>
</nav>