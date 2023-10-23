<?php
@session_start();
include_once __DIR__ .'/../../includes/db_connect.php';
function getProductsGLC(){
    global $conn;
    if(!isset($_GET['category'])){
    $select_query = "select * from `products` where product_keywords like '%glc%' order by rand()";
    $stmt = $conn->prepare($select_query);
    $stmt->execute();
    while($row = $stmt->fetch()){
      $product_id = $row['product_id'];
      $product_title = $row['product_title'];
      $product_image1 = $row['product_image1'];
      $product_price = $row['product_price'];
      $category_id = $row['category_id'];
      echo "<div class='col-md-4'>
      <div class='card border-0' style='width: 19rem;'>
          <a href='product_details.php?product_id=$product_id'><img src='./views/admin_areas/product_images/$product_image1' class='card-img-top btn img' alt=''></a>
          <div class='card-body mt-1 text-center'>
              <p class='card-text btn text-center fw-bold fs-6'>$product_title</p>
          </div>
          <span class='text-danger text-center fw-bold fs-6'>$product_price VND</span>

      </div>
    </div>";
    }
}
}
function getProductsCLASS(){
    global $conn;
    if(!isset($_GET['category'])){
    $select_query = "select * from `products` where product_keywords like '%class%' order by rand()";
    $stmt = $conn->prepare($select_query);
    $stmt->execute();
    while($row = $stmt->fetch()){
      $product_id = $row['product_id'];
      $product_title = $row['product_title'];
      $product_image1 = $row['product_image1'];
      $product_price = $row['product_price'];
      $category_id = $row['category_id'];
      echo "<div class='col-md-4'>
      <div class='card border-0' style='width: 19rem;'>
          <a href='product_details.php?product_id=$product_id'><img src='./views/admin_areas/product_images/$product_image1' class='card-img-top btn img' alt=''></a>
          <div class='card-body mt-1 text-center'>
              <p class='card-text btn text-center fw-bold fs-6'>$product_title</p>
          </div>
          <span class='text-danger text-center fw-bold fs-6'>$product_price VND</span>

      </div>
    </div>";
    }
}
}
function getProductsMAYBACH(){
    global $conn;
    if(!isset($_GET['category'])){
    $select_query = "select * from `products` where product_keywords like '%maybach%' order by rand()";
    $stmt = $conn->prepare($select_query);
    $stmt->execute();
    while($row = $stmt->fetch()){
      $product_id = $row['product_id'];
      $product_title = $row['product_title'];
      $product_image1 = $row['product_image1'];
      $product_price = $row['product_price'];
      $category_id = $row['category_id'];
      echo "<div class='col-md-4'>
      <div class='card border-0' style='width: 19rem;'>
          <a href='product_details.php?product_id=$product_id'><img src='./views/admin_areas/product_images/$product_image1' class='card-img-top btn img' alt=''></a>
          <div class='card-body mt-1 text-center'>
              <p class='card-text btn text-center fw-bold fs-6'>$product_title</p>
          </div>
          <span class='text-danger text-center fw-bold fs-6'>$product_price VND</span>

      </div>
    </div>";
    }
}
}
function getProductsGCLASS(){
    global $conn;
    if(!isset($_GET['category'])){
    $select_query = "select * from `products` where product_keywords like '%g-c%' order by rand()";
    $stmt = $conn->prepare($select_query);
    $stmt->execute();
    while($row = $stmt->fetch()){
      $product_id = $row['product_id'];
      $product_title = $row['product_title'];
      $product_image1 = $row['product_image1'];
      $product_price = $row['product_price'];
      $category_id = $row['category_id'];
      echo "<div class='col-md-4'>
      <div class='card border-0' style='width: 19rem;'>
          <a href='product_details.php?product_id=$product_id'><img src='./views/admin_areas/product_images/$product_image1' class='card-img-top btn img' alt=''></a>
          <div class='card-body mt-1 text-center'>
              <p class='card-text btn text-center fw-bold fs-6'>$product_title</p>
          </div>
          <span class='text-danger text-center fw-bold fs-6'>$product_price VND</span>

      </div>
    </div>";
    }
}
}
function getallProducts(){
    $pageSize = 6;
    $startRow =0;
    if(isset($_GET['startRow']) == true) $startRow = $_GET['startRow'];
    global $conn;
    if(!isset($_GET['category'])){
    $select_query = "select * from `products` limit $startRow,$pageSize";
    $stmt = $conn->prepare($select_query);
    $stmt->execute();
    while($row = $stmt->fetch()){
      $product_id = $row['product_id'];
      $product_title = $row['product_title'];
      $product_image1 = $row['product_image1'];
      $product_price = $row['product_price'];
      $category_id = $row['category_id'];
      echo "<div class='col-md-4 col-sm-6 text-center'>
      <div class='card border-0' style='width: 16rem;'>
          <a href='product_details.php?product_id=$product_id'><img src='./views/admin_areas/product_images/$product_image1' class='card-img-top btn img' alt=''></a>
          <div class='card-body mt-1 text-center'>
              <p class='card-text btn text-center fw-bold fs-6'>$product_title</p>
          </div>
          <span class='text-danger text-center fw-bold fs-6'>$product_price VND</span>

      </div>
    </div>";
    }
}
}
function view_details(){
    global $conn;
    if(isset($_GET['product_id'])){
    if(!isset($_GET['category'])){
    $product_id = $_GET['product_id'];
    $select_query = "select * from `products` where product_id = ?";
    $stmt = $conn->prepare($select_query);
    $stmt->execute([$product_id]);
    while($row = $stmt->fetch()){
      $product_id = $row['product_id'];
      $product_title = $row['product_title'];
      $product_image1 = $row['product_image1'];
      $product_price = $row['product_price'];
      $category_id = $row['category_id'];
      $product_keywords=$row['product_keywords'];
      $select_cat_title = "select category_title from `categories` where category_id = ?";
      $stmt = $conn->prepare($select_cat_title);
      $stmt->execute([$category_id]);
      while($row=$stmt->fetch()){
        $category_title = $row['category_title'];
      echo "<div class='col-md-12 mb-2'>
  <div class='row py-4 w-75 m-auto'>
      <div class='col-md-4 col-sm-12 col-lg-4'>
        <img src='./views/admin_areas/product_images/$product_image1' class='d-block' style='width:100%;' alt='...'>
      </div>
      <div class='col-md-8 col-lg-8 col-sm-12 px-2'>
        <h6 style='font-size:10px;'>$category_title</h6>
        <hr class='w-25'>
      <h3 class='text-dark mt-2'>$product_title</h3>
      <i class='fa-regular fa-star text-warning'></i>
      <i class='fa-regular fa-star text-warning'></i>
      <i class='fa-regular fa-star text-warning'></i>
      <i class='fa-regular fa-star text-warning'></i>
      <i class='fa-regular fa-star text-warning'></i>
      <div class='py-1'><h6 class='text-danger'>Giá: $product_price VND</h6></div>
      <div class='row fw-bold text-dark m-2 mt-4'>
      Mô tả:
      </div>
      <div class='m-2'>
      <a href='index.php?add_to_cart=$product_id' class='btn btn-warning'>Thêm vào <i class='fa-solid fa-cart-shopping'></i></a>
      </div>
      <div class='mt-5 m-2'>
      <a href='index.php?product_id= $product_id' class='m-2'>Quay về</a>
      </div>  
  
      </div>
  </div>
  </div>";
    }
}
  }
  }
  }
    function cart_item(){
      if(isset($_GET['add_to_cart'])){
        global $conn;
        $select_query = "select *from `cart_details`";
        $stmt=$conn->prepare($select_query);
        $stmt->execute();
        $count_cart_items = $stmt->rowCount();
      }else{
        global $conn;
        $select_query = "select *from `cart_details`";
        $stmt=$conn->prepare($select_query);
        $stmt->execute();
        $count_cart_items= $stmt->rowCount();
        }
        echo $count_cart_items;
      }
      function add_cart(){
        if(isset($_GET['add_to_cart'])){
          global $conn;
          $get_product_id=$_GET['add_to_cart'];
          $select_query = "select *from `cart_details` where product_id=?";
          $stmt= $conn->prepare($select_query);
          $stmt->execute([$get_product_id]);
          $num_of_rows= $stmt->rowCount();
          if($num_of_rows>0){
            echo "<script>alert('Sản phẩm đã có trong giỏ hàng!!')</script>";
            echo "<script>window.open('index.php','_self')</script>";
      
          }else{
            $qty = 1;
            $insert_query = "insert into `cart_details` (product_id,quantity) values(?,?)";
            $stmt=$conn->prepare($insert_query);
            $stmt->execute([$get_product_id,$qty]);
            echo "<script>alert('Đã thêm thành công vào giỏ hàng!')</script>";
            echo "<script>window.open('index.php','_self')</script>";
          }
      
        }
      }
      function update_delete_cart(){
        global $conn;
        if(isset($_POST['update_product_qty'])){
          $update_value = $_POST['update_qty'];
          $update_id = $_POST['update_qty_id'];
          // echo $update_id;
          // echo $update_value;
          $update_qty_query="update `cart_details` set quantity =  ? where product_id = ?";
          $stmt = $conn->prepare($update_qty_query);
          $update_qty_query = $stmt->execute([$update_value,$update_id]);
          if($update_qty_query){
              echo "<script>alert('Cập nhật thành công!')</script>" ;
          }
      }
      if(isset($_GET['remove'])){
          $remove_id = $_GET['remove'];
          $sql = "delete from `cart_details` where product_id = ?";
          $stmt=$conn->prepare($sql);
          $stmt ->execute([$remove_id]);
      }
      }
?>