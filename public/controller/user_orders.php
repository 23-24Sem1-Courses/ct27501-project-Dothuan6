<?php
  include_once __DIR__ . '/../../../includes/db_connect.php';
  @session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đơn hàng của tôi</title>
</head>

<?php
include_once('./../view/user_orders.php');
 ?>

</html>