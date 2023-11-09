<style>
body {
    background-color: white;
}

.carousel-inner {
    height: 700px !important;
}

.btn {
    transition: transform 0.3s ease-in-out !important;
    transition-timing-function: ease !important;
    transition-delay: 0s !important;
}

.btn:hover {
    transform: translateY(-10px);
}

.nav-link {
    transition: transform 0.3s ease-in-out !important;
    transition-timing-function: ease !important;
    transition-delay: 0s !important;
}

.nav-link:hover {
    transform: translateY(-10px);
}

.navbar {
    background-color: black;
}
</style>

<body>
    <div class="row">
        <div class="col-md-2 navbar p-0 px-5 col-sm-3 col-lg-2">
            <!-- sidenav -->
            <ul class="navbar-nav text-center" style="height: 100vh;">
                <li class="nav-item">
                    <a href="#" class="nav-link text-light mt-3">
                        <h4>
                            <?php
                            if((isset($_SESSION['username']))){
                                echo $_SESSION['username'];
                                }else{
                                    echo "Tai Khoan";
                                }
                             ?></h4>
                    </a>
                </li>

                <?php
        if(isset($_SESSION['username'])){
            $username=$_SESSION['username'];
        }
      $sql="select * from `users` where user_name = ?";
      $stmt = $conn->prepare($sql);
      $stmt->execute([$username]);
      $result=$stmt->fetch(PDO::FETCH_ASSOC);
      ?>
                <li class="nav-item">
                    <a href='user_profile.php?my_orders' class="nav-link text-light ">Đơn mua</a>
                </li>
                <li class="nav-item">
                    <a href='user_profile.php?delete_account' class="nav-link text-light ">Xóa tài khoản</a>
                </li>
                <li class="nav-item">
                    <a href='user_logout.php' class="nav-link text-light ">Đăng xuất</a>
                </li>
            </ul>
        </div>
        <div class="col-md-10 text-center">
            <?php
    // get_user_oder_details();
            if(isset($_GET['my_orders'])){
            include('user_orders.php');
            }if(isset($_GET['delete_account'])){
            include('user_delete.php');
            }
            ?>
        </div>
        <?php
    include_once __DIR__ . '/../view/footer.php'; 
    ?>
</body>