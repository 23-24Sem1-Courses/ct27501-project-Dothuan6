<?php
  include_once __DIR__ . '/../../../includes/db_connect.php';
  include_once __DIR__ . '/../../controllers/function.php';
  @session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
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
    <?php include_once __DIR__ . '/../../../includes/header.php' ?>

    <form class="w-50 mt-3 border border-2 m-auto reg_form" action="" method="post" enctype="multipart/form-data">
        <h1 class="text-center text-primary py-3">Đăng ký thành viên mới</h1>
        <div class="row">
            <!-- <img class="col-lg-6 col-md-5" src="../images/reg_image.svg" alt=""> -->
            <div class="offset-3 w-50">
                <!-- username -->
                <div class="input-group has-validation">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <div class="form-floating is-invalid">
                        <input autocomplete="off" name="user_username" type="text" class="form-control"
                            id="user_username" placeholder="Username" required>
                        <label for="user_username">Tên</label>
                    </div>
                    <div class="invalid-feedback">
                        Nhập vào Tên đăng nhập.
                    </div>
                </div>
                <!-- email -->
                <div class="input-group has-validation">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                    <div class="form-floating is-invalid">
                        <input name="user_email" type="text" class="form-control" id="floatingInputGroup2"
                            placeholder="Email" required>
                        <label for="floatingInputGroup2">Email</label>
                    </div>
                    <div class="invalid-feedback">
                        Nhập vào email.
                    </div>
                </div>
                <!-- Pass -->
                <div class="input-group has-validation">
                    <span class="input-group-text"><i class="fa-solid fa-eye"></i></span>
                    <div class="form-floating is-invalid">
                        <input name="user_password" type="password" class="form-control" id="floatingInputGroup2"
                            placeholder="Password" required>
                        <label for="floatingInputGroup2">Mật khẩu</label>
                    </div>
                    <div class="invalid-feedback">
                        Nhập vào mật khẩu.
                    </div>
                </div>
                <!-- confirm pass -->
                <div class="input-group has-validation">
                    <span class="input-group-text"><i class="fa-regular fa-eye"></i></span>
                    <div class="form-floating is-invalid">
                        <input name="conf_user_password" type="password" class="form-control" id="floatingInputGroup2"
                            placeholder="Password" required>
                        <label for="floatingInputGroup2">Xác nhận mật khẩu</label>
                    </div>
                    <div class="invalid-feedback">
                        Xác nhận mật khẩu.
                    </div>
                </div>
                <!-- address -->
                <div class="input-group has-validation">
                    <span class="input-group-text"><i class="fa-solid fa-location-pin"></i></span>
                    <div class="form-floating is-invalid">
                        <input name="user_address" type="text" class="form-control" id="floatingInputGroup2"
                            placeholder="Address" required>
                        <label for="floatingInputGroup2">Địa chỉ</label>
                    </div>
                    <div class="invalid-feedback">
                        Nhập vào địa chỉ.
                    </div>
                </div>
                <!-- mobile -->
                <div class="input-group has-validation">
                    <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                    <div class="form-floating is-invalid">
                        <input name="user_phone" type="text" class="form-control" id="floatingInputGroup2"
                            placeholder="Contact" required>
                        <label for="floatingInputGroup2">Liên hệ</label>
                    </div>
                    <div class="invalid-feedback">
                        Nhập vào số điện thoại.
                    </div>
                </div>
                <!--  -->
                <input class="btn btn-info px-3 mt-3" type="submit" name="Register" id="Register" value="Đăng ký">
                <p class="small fw-bold mt-2 pt-1 mb-0">Bạn đã có tài khoản ? <strong><a class="text-danger"
                            href="user_login.php"> Đăng nhập</a></strong></p>

            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
<?php
userReg();
?>