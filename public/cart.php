<?php
@session_start();
include_once __DIR__ .'/../includes/db_connect.php';
include_once __DIR__ . '/controllers/function.php';
?>
<?php
update_delete_cart();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết giỏ hàng</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
    .cart_img {
        width: 100px !important;
        border-radius: 10px;
    }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="container-fluid">
            <?php include_once('./../includes/navbar.php') ?>
        </div>
        <!-- second child -->
        <nav class="navbar-expand-lg navbar-dark text-dark px-3" style="display: block;">
            <ul class="navbar-nav me-auto py-2 ">
                <?php 
include_once __DIR__ . '/../includes/navbar_nav.php';
  ?>
            </ul>
        </nav>
        <h3 class="text-center py-3">Chi tiết giỏ hàng</h3>
        <div class="container">
            <div class="row">
                <form action="" method="post">
                    <table class="table table-bordered">
                        <?php
                    global $conn;
                    $cart_query_1="select *from `cart_details`";
                    $stmt = $conn->prepare($cart_query_1);
                    $stmt->execute();
                    if($stmt->rowCount()>0){
                    echo "<thead>
                        <tr class='text-center'>
                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Giá SP</th>
                            <th>Số lượng</th>
                            <th>Tổng tiền</th>
                            <th colspan='2'>Hoạt động</th>
                        </tr>
                    </thead>";
                    ?>
                        <tbody>
                            <?php 
                   global $conn;
                   $total_price=0.00;
                   $total_price_format =0.00;  
                   $select_query = "select *from `cart_details`";
                   $stmt=$conn->prepare($select_query);
                   $stmt->execute();
                   while($row=$stmt->fetchAll()){
                    foreach($row as $row){
                     $product_id = $row['product_id'];
                     $product_qty=$row['quantity'];
                     $select_products="select *from `products` where product_id=?";
                     $stmt = $conn->prepare($select_products);
                     $stmt->execute([$product_id]);
                     while($row_product_price=$stmt->fetch()){
                       $price_table = $row_product_price['product_price'];
                       $product_title = $row_product_price['product_title'];
                       $product_image1 = $row_product_price['product_image1'];
                       
                       $subtotal = number_format((int)$product_qty*(int)$price_table,3);
                       $total_price =((int)$total_price + (int)$subtotal);

                       $total_price_format = number_format((int)$total_price,3);
                       $vat = number_format($total_price_format * (1/100),3);
                       $sub_price = number_format(($total_price_format + $vat),3);
                         ?>
                            <tr class='text-center'>
                                <td><?php echo $product_title ?></td>
                                <td><?php echo "<img class='cart_img center-block' src='/views/admin_areas/product_images/$product_image1'"?>
                                </td>
                                <td><?php echo "$price_table USD" ?></td>
                                <td>
                                    <form action="" method="post">
                                        <input type="hidden" class="text-center" value="<?php echo $product_id ?>"
                                            name="update_qty_id">

                                        <div class="quantity_box">
                                            <input value="<?php echo $product_qty ?>" type="number" name="update_qty"
                                                min="1" style="width: 70px; height: 20px;margin-top: 10px;">
                                            <button class="btn text-warning" type='submit' name='update_product_qty'><i
                                                    class="fa-solid fa-square-pen"></i></button>
                                        </div>
                                    </form>
                                </td>
                                <td class="text-danger"><?php echo "$subtotal USD" ?></td>

                                <td>
                                    <a href="cart.php?remove=<?php echo $product_id ?>"
                                        class="mx-3 text-danger py-2 px-2 border-0 btn"
                                        onclick="return confirm('Bạn chắn chắn muốn xóa sản phẩm này?')"><i
                                            class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php 
                    }

                }
          }
    ?>
                        </tbody>
                    </table>
                    <!-- subtotal -->
                    <?php
        if(isset($_SESSION['username'])){
        $cart_query="select * from `cart_details`";
        $stmt=$conn->prepare($cart_query);
        $stmt->execute();
        $result_count=$stmt->rowCount();
        $get_username= $_SESSION['username'];
        $select_user_id="select * from `users` where user_name=?";
        $stmt=$conn->prepare($select_user_id);
        $stmt->execute([$get_username]);
        $row_user_id = $stmt->fetch();
        $user_id = $row_user_id['user_id'];
        
        if($result_count>0){
             echo "<div>
             <div class='row'>
             <h7 class='px3'>Tổng tiền: <strong class='text-danger'> $total_price_format USD</strong></h7>
             </div>
             <div class='row py-2'>
             <h7 class='px3'>Thuế VAT(1%): <strong class='text-danger'> $vat USD</strong></h7>
             </div>
             <div class='row'>
             <h7 class='px3'>Thành tiền: <strong class='text-danger'>$sub_price USD</strong></h7>
             </div>
             <div class='py-2'>
             <button class='mx-0 bg-info py-2 px-3 border-0 btn btn-outline' name='continue_shopping'> <a 
             href='index.php' class='text-dark' style='text-decoration: none;'>Mua sắm</a></button>
            <button class='mx-2 bg-secondary py-2 px-3 border-0 btn btn-outline'> <a href='/views/user_areas/checkout.php?user_id=$user_id' class='text-light' style='text-decoration: none;'>Thanh toán</a></button>
            </div></div>";
        }
      else{
              echo "<button name='continue_shopping' class='mx-2 mb-3 bg-info py-2 px-3 border-0 btn btn-outline'> <a href='index.php' class='text-dark' style='text-decoration: none;'>Mua sắm</a></button>";
          
        }if(isset($_POST['continue_shopping'])){
          echo "<script>window.open('index.php','self')</script>";
        }
      }else{
        $cart_query="select * from `cart_details`";
        $stmt=$conn->prepare($cart_query);
        $stmt->execute();
        $result_count=$stmt->rowCount();
        if($result_count>0){
             echo "<div class='d-flex mb-5'><h7 class='px-3'>Tổng tiền: <strong class='text-info'>$total_price_format
             USD</strong></h7>
                <button class='mx-2 bg-info py-2 px-3 border-0  
                bg-warning btn btn-outline' name='continue_shopping'> <a
                        href='index.php' class='text-dark' style='text-decoration: none;'>Mua sắm</a></button>
                <button class='mx-2 bg-secondary py-2 px-3 border-0 btn btn-outline'> <a href='/views/user_areas/checkout.php'
                        class='text-light' style='text-decoration: none;'>Thanh toán</a></button>
        </div>";
        }
        else{
        echo "<button name='continue_shopping' class='mx-2 mb-3 bg-warning py-2 px-3 border-0 btn btn-outline'> <a
                href='index.php' class='text-dark' style='text-decoration: none;'>Mua sắm</a></button>";

        }if(isset($_POST['continue_shopping'])){
        echo "<script>window.open('index.php', '_self')</script>"; 
        }
        }
        }else{
        echo "<div class='alert alert-success' role='alert'>
            Không có sản phẩm trong giỏ hàng!
        </div>";
        echo "<button name='continue_shopping' class='mx-2 mb-3 bg-info py-2 px-3 border-0 btn btn-outline'> <a
                href='index.php' class='text-dark' style='text-decoration: none;'>Mua sắm</a></button>";
        }
        ?>
            </div>
        </div>
        </form>
    </div>
    <?php include_once __DIR__ . '/../includes/footer.php' ?>
</body>

</html>