<body>
    <div class="container-fluid my-3 m-auto w-50 py-2 border">
        <h2 class="text-center py-3 text-primary">Đăng nhập thành viên</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-floating mb-4">
                        <!-- username field -->
                        <input type="text" class="form-control" id="user_username" placeholder="Nập vào tên"
                            autocomplete="off" required="required" name="user_username">
                        <label for="user_username" class="form-label"><i class="fa-regular fa-user"></i> Tên</label>

                    </div>
                    <div class="form-floating mb-4">
                        <!-- password field -->
                        <input type="password" class="form-control" id="user_password" placeholder="Nhập vào mật khẩu"
                            autocomplete="off" required="required" name="user_password">
                        <label for="user_password" class="form-label"><i class="fa-regular fa-eye"></i> Mật khẩu</label>

                    </div>
                    <div class="form-floating mb-4">
                        <!-- password field -->
                        <input type="password" class="form-control" id="user_admin_code"
                            placeholder="Nhập vào mã quản lý" autocomplete="off" name="user_admin_code">
                        <label for="user_admin_code" class="form-label">Mã quản lý</label>
                    </div>
                    <input class="mt-4 btn btn-info mb-6 px-3" type="submit" name="user_login" id="user_login"
                        value="Đăng nhập">
                    <p class="small fw-bold mt-2 pt-1 mb-0">Chưa có tài khoản?<a class="text-danger"
                            href="user_reg.php">
                            Đăng ký</a></p>
                </form>
            </div>
        </div>
    </div>
</body>