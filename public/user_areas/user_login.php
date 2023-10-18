<?php
include_once __DIR__ . '/../../includes/db_connect.php';
// include_once('../functions/common_function.php');
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
    <!-- <style>
        body{
            overflow-x: hidden;
        }
     </style> -->
</head>

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
                    <input class="mt-4 btn btn-info mb-6 px-3" type="submit" name="user_login" id="user_login"
                        value="Đăng nhập">
                    <p class="small fw-bold mt-2 pt-1 mb-0">Chưa có mật khẩu?<a class="text-danger" href="user_reg.php">
                            Đăng ký</a></p>
                </form>
            </div>

        </div>
    </div>
</body>

</html>
<?php
if(isset($_POST['user_login'])){
    global $conn;
    $user_username = $_POST['user_username'];
    $user_usermail = $_POST['user_username'];
    $user_password = $_POST['user_password'];
    $select_query="select * from `users` where user_name=?";
    $stmt = $conn->prepare($select_query);
    $stmt->execute([$user_username]);
    $row_count = $stmt-> rowCount();
    $row_data=$stmt->fetch(PDO::FETCH_ASSOC);
    // $row_data['user_password'];

    //cart items
    // $select_query_cart="select * from `cart_details` where ip_address ='$user_ip'";
    // $select_cart = mysqli_query($con,$select_query_cart);
    // $row_count_cart = mysqli_num_rows($select_cart);
    if($row_count>0){
        $_SESSION['username'] = $user_username;
        if(password_verify($user_password,$row_data['user_password'])){
            if($row_count==1){
                $_SESSION['username'] = $user_username;
                echo "<script>alert('Đăng nhập thành công!')</script>";
                echo "<script>window.open('user_profile.php','_self')</script>";
            }else{
                $_SESSION['username'] = $user_username;
                echo "<script>alert('Đăng nhập thành công')</script>";
                echo "<script>window.open('user_profile.php','_self')</script>";
        }
        }
        else{
            echo "<script>alert('Mật khẩu hoặc tên không đúng!')</script>";
    }
   
}
else{
    echo "<script>alert('Mật khẩu hoặc tên không đúng!')</script>";
}
}
?>