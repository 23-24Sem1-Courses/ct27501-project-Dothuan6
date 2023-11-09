<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="startbootstrap-sb-admin-2-gh-pages/startbootstrap-sb-admin-2-gh-pages/vendor/jquery/jquery.min.js">
</script>

<body>
    <form class="w-50 mt-3 border border-2 m-auto reg_form" action="" method="post" enctype="multipart/form-data">
        <h1 class="text-center text-primary py-3">Đăng ký thành viên mới</h1>
        <div class="row">
            <!-- <img class="col-lg-6 col-md-5" src="../images/reg_image.svg" alt=""> -->
            <div class="offset-3 w-50">
                <!-- username -->
                <div class="input-group has-validation">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <div class="form-floating">
                        <input autocomplete="off" name="user_username" type="text" class="form-control"
                            id="user_username" placeholder="Username" required>
                        <label for="user_username">Tên</label>
                    </div>
                    <div class="invalid-feedback">
                        Nhập vào Tên đăng nhập.
                    </div>
                </div>
                <!-- email -->
                <div class="input-group has-validation mt-2">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                    <div class="form-floating">
                        <input name="user_email" type="text" class="form-control" id="floatingInputGroup2"
                            placeholder="Email" required>
                        <label for="floatingInputGroup2">Email</label>
                    </div>
                    <div class="invalid-feedback">
                        Nhập vào email.
                    </div>
                </div>
                <!-- Pass -->
                <div class="input-group has-validation mt-2">
                    <span class="input-group-text"><i class="fa-solid fa-eye"></i></span>
                    <div class="form-floating">
                        <input name="user_password" type="password" class="form-control" id="floatingInputGroup2"
                            placeholder="Password" required>
                        <label for="floatingInputGroup2">Mật khẩu</label>
                    </div>
                    <div class="invalid-feedback">
                        Nhập vào mật khẩu.
                    </div>
                </div>
                <!-- confirm pass -->
                <div class="input-group has-validation mt-2">
                    <span class="input-group-text"><i class="fa-regular fa-eye"></i></span>
                    <div class="form-floating">
                        <input name="conf_user_password" type="password" class="form-control" id="floatingInputGroup2"
                            placeholder="Password" required>
                        <label for="floatingInputGroup2">Xác nhận mật khẩu</label>
                    </div>
                    <div class="invalid-feedback">
                        Xác nhận mật khẩu.
                    </div>
                </div>
                <!-- address -->
                <div class="input-group has-validation mt-2">
                    <span class="input-group-text"><i class="fa-solid fa-location-pin"></i></span>
                    <div class="form-floating">
                        <input name="user_address" type="text" class="form-control" id="floatingInputGroup2"
                            placeholder="Address" required>
                        <label for="floatingInputGroup2">Địa chỉ</label>
                    </div>
                    <div class="invalid-feedback">
                        Nhập vào địa chỉ.
                    </div>
                </div>
                <!-- mobile -->
                <div class="input-group has-validation mt-2">
                    <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                    <div class="form-floating">
                        <input name="user_phone" type="text" class="form-control" id="floatingInputGroup2"
                            placeholder="Contact" required>
                        <label for="floatingInputGroup2">Liên hệ</label>
                    </div>
                    <div class="invalid-feedback">
                        Nhập vào số điện thoại.
                    </div>
                </div>
                <div class="input-group has-validation mt-2">
                    <span class="input-group-text"><i class="fa-solid fa-code-merge"></i></span>
                    <div class="form-floating">
                        <input name="user_code_admin" type="text" class="form-control" id="floatingInputGroup2"
                            placeholder="Contact">
                        <label for="floatingInputGroup2">Mã Quản Lý</label>
                    </div>
                    <div class="invalid-feedback">
                        Nhập vào mã quản lý
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