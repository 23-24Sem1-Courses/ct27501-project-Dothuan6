<?php
include_once __DIR__ . '/../../../includes/db_connect.php';
include_once __DIR__ . '/../../../controller/commonfunction.php';
@session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <!-- css link bstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- font aware cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css style link -->
    <link rel="stylesheet" href="../style.css">
    <style>
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
    </style>
</head>

<body>
    <div class="container-fluid my-3 m-auto w-100">
        <h2 class="text-center py-3 text-primary">Đăng nhập thành viên</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-floating mb-4">
                        <!-- username field -->
                        <input type="text" class="form-control" id="user_username" placeholder="Nhập vào tên"
                            autocomplete="off" required="required" name="user_username">
                        <label for="user_username" class="form-label">Tên</label>

                    </div>
                    <div class="form-floating mb-4">
                        <!-- password field -->
                        <input type="password" class="form-control" id="user_password" placeholder="Nhập vào mật khẩu"
                            autocomplete="off" required="required" name="user_password">
                        <label for="user_password" class="form-label">Mật khẩu</label>
                    </div>
                    <div class="form-floating mb-4">
                        <!-- password field -->
                        <input type="text" class="form-control" id="user_admin_code" placeholder="Nhập vào mã quản lý"
                            autocomplete="off" name="user_admin_code" required>
                        <label for="user_admin_code" class="form-label">Mã quản lý</label>
                    </div>
                    <input class="mt-4 btn btn-info mb-6 px-3" type="submit" name="user_login" id="user_login"
                        value="Đăng nhập">
                    <p class="small fw-bold mt-2 pt-1 mb-0">Chưa có tài khoản?<a class="text-danger"
                            href="./../user_areas/user_reg.php">
                            Đăng ký</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php
userLog();
?>