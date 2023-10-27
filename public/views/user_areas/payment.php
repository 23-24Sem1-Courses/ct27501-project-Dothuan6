<?php
   include_once __DIR__ . '/../../../includes/db_connect.php';
   @session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán</title>
</head>

<body>
    <!--php access user id  -->
    <?php include_once __DIR__ . '/../../../includes/header.php' ?>
    <?php
     global $con;
     if(isset($_GET['user_id'])){
        $get_userid = $_GET['user_id'];
     }
    ?>
    <div class="container w-50 m-auto">
        <h2 class="text-center">Phương thức thanh toán</h2>
        <div class="my-5 row d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <a href="order.php?user_id=<?php echo $get_userid ?>" target="_plank">
                    <h3 class="text-center">Thanh toán khi nhận hàng</h3>
                </a>
            </div>
        </div>
    </div>
</body>

</html>