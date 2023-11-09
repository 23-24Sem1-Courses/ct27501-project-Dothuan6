<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.php">
        <i class="fa-solid fa-house"></i>
        <span>TRANG CHỦ</span></a>
</li>
<hr class="sidebar-divider">
<li class="nav-item active">
    <a class="nav-link" href="index.php?action=insert_products">
        <span><i class="fa-regular fa-calendar-plus"></i> SẢN PHẨM</span></a>
</li>
<hr class="sidebar-divider">
<li class="nav-item active">
    <a class="nav-link" href="index.php?action=insert_categories">
        <span><i class="fa-solid fa-list"></i> DANH MỤC</span></a>
</li>
<hr class="sidebar-divider">
<li class="nav-item active">
    <a class="nav-link" href="index.php?action=view_users">
        <span><i class="fa-solid fa-user"></i> KHÁCH HÀNG</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
</ul>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
            <div class="bg-dark p-4">
                <div>
                    <h5 class="text-body-emphasis h4"><i class="fa-solid fa-people-roof"></i> Giao diện quản lý
                        <?php if(!isset($_SESSION['adminname'])){
                                  echo "<a href='admin_reg.php'><button
                                  name='reg' class='btn btn-outline reg' value='Logout'>Đăng
                                  Ký</button>
                          </a>";
                                } ?></h5>
                </div>
                <?php 
                        if(isset($_SESSION['adminname'])){
                          echo "<a href='admin_logout.php'><button name='logout' class='btn btn-outline' value='Logout'>Đăng
                          xuất</button>
                  </a>";
                        }else{
                          echo "<a href='admin_log.php'><button name='login' class='btn btn-outline' value='Login'>Đăng
                          nhập</button>
                  </a>";
                        }
                
                        
                        ?>

            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>