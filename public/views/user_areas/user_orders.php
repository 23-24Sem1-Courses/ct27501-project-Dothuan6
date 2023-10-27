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

<body>
    <?php include_once __DIR__ . '/../../../includes/header.php' ?>
    <?php 
    global $conn;
    $username = $_SESSION['username'];
    $get_user="select * from `users` where user_name = ?";
    $stmt = $conn->prepare($get_user);
    $stmt->execute([$username]);
    $row_fetch = $stmt->fetch();
    $user_id = $row_fetch['user_id'];
    ?>
    <h3 class="text-dark mt-3">Các đơn hàng của tôi</h3>
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th class="bg-dark text-light">STT</th>
                <th class="bg-dark text-light">Tổng tiền đơn hàng</th>
                <th class="bg-dark text-light">Số sản phẩm</th>
                <th class="bg-dark text-light">Mã hóa đơn</th>
                <th class="bg-dark text-light">Ngày đặt</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $number=0;
            $get_order_details = "select * from `user_orders` where user_id = ?";
            $stmt = $conn->prepare($get_order_details);
            $stmt->execute([$user_id]);
            while($row_orders= $stmt->fetchAll()){
                foreach($row_orders as $row_orders){
                $order_id = $row_orders['order_id'];
                $amount_due=number_format($row_orders['amount_due'],3);
                $total_products = $row_orders['total_products'];
                $invoice_number=$row_orders['invoice_number'];
                $order_date = $row_orders['order_date'];
                $number += 1;
                echo "<tr>
                <td class='bg-light text-dark'>$number</td>
                <td class='bg-light text-dark'>$amount_due USD</td>
                <td class='bg-light text-dark'>$total_products</td>
                <td class='bg-light text-dark'>$invoice_number</td>
                <td class='bg-light text-dark'>$order_date</td>";
                ?>
            <?php
            }
        }
             ?>

        </tbody>
    </table>
</body>

</html>