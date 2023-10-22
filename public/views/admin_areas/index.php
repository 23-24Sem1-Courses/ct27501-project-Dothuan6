<?php
  include_once __DIR__ . '/../../../includes/db_connect.php';
  include_once __DIR__. '/../../../controller/commonfunction.php';
  @session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($_SESSION['admin_name'])){
      echo "Quản Lý {$_SESSION['admin_name']}";
    }else{
      echo "Quản Lý";
    }
     ?></title>

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


    <!-- css link bstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- font aware cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css style link -->
    <!-- <link rel="stylesheet"
        href="../startbootstrap-sb-admin-2-gh-pages/startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css"> -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.4/css/sb-admin-2.min.css"
        integrity="sha512-Mk4n0eeNdGiUHlWvZRybiowkcu+Fo2t4XwsJyyDghASMeFGH6yUXcdDI3CKq12an5J8fq4EFzRVRdbjerO3RmQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js"
        integrity="sha512-7U4rRB8aGAHGVad3u2jiC7GA5/1YhQcQjxKeaVms/bT66i3LVBMRcBI9KwABNWnxOSwulkuSXxZLGuyfvo7V1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
    .logo {
        width: 6%;
        height: 7%;
        border-radius: 20px;
    }

    .admin_img {
        width: 100px;
        object-fit: contain;
    }

    .product_images {
        width: 50%;
        object-fit: contain;
        border-radius: 10px;

    }

    .edit_image {
        width: 10%;
        border-radius: 20%;
        margin-left: 2%;
    }

    .user_images {
        width: 50%;
        height: 76px;
        /* object-fit: contain; */
        border-radius: 20%;
        align-items: center;
    }

    .img {
        width: 10%;
    }

    .admin_image {
        border-radius: 20px;
    }

    .btn {
        transition: transform 0.3s ease-in-out !important;
        transition-timing-function: ease !important;
        transition-delay: 0s !important;
    }

    .btn:hover {
        transform: translateY(-10px);
        cursor: pointer !important;
    }

    .nav-link {
        transition: transform 0.3s ease-in-out !important;
        transition-timing-function: ease !important;
        transition-delay: 0s !important;
    }

    .nav-link:hover {
        cursor: pointer !important;
        transform: translateY(-10px);
    }
    </style>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <?php
                if(isset($_SESSION['admin_name']))
                {
                  echo " <div class='sidebar-brand-text mx-3'>{$_SESSION['admin_name']}</div>";
                }else{
                  echo " <div class='sidebar-brand-text mx-3'>Quản Lý</div>";
                  
                }
                ?>

            </a>
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
                <a class="nav-link" href="index.php?insert_products">
                    <span><i class="fa-regular fa-calendar-plus"></i> SẢN PHẨM</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?insert_categories">
                    <span><i class="fa-solid fa-list"></i> DANH MỤC</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?view_users">
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
                                <?php if(!isset($_SESSION['admin_name'])){
                                  echo "<a href='admin_reg.php'><button
                                  name='reg' class='btn btn-outline reg' value='Logout'>Đăng
                                  Ký</button>
                          </a>";
                                } ?></h5>
                        </div>
                        <?php 
                        if(isset($_SESSION['admin_name'])){
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

                <!--content-->
                <div class="container-fluid mt-3">

                    <?php
                    if(isset($_SESSION['admin_name'])){
  if(isset($_GET['insert_categories'])){
    include('insert_categories.php');
  }
  if(isset($_GET['insert_products'])){
    include('insert_products.php');
  }if(isset($_GET['view_users'])){
    include('view_users.php');
  }
  if(isset($_GET['edit_category'])){
    include('edit_categories.php');
  }if(isset($_GET['edit_products'])){
    include('edit_products.php');
  }if(isset($_GET['delete_category'])){
    deleteCategories();
  }if(isset($_GET['delete_products'])){
    deleteProducts();
  }
  if(isset($_GET['delete_users'])){
    deleteUsers();
  }
}else{
  echo "Helo
";
}
?>

                </div>
                <!--  -->
            </div>
        </div>
        <!-- js link bstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>

</body>

</html>