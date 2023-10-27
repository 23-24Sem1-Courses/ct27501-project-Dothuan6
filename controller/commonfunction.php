<?php
@session_start();
include_once __DIR__ .'/../includes/db_connect.php';
function insertCategories(){
    global $conn;
    if(isset($_POST["insert_cat"])){
        $category_title=htmlspecialchars($_POST["cat_title"]);

        //select data from database
        $select_query = "select * from `categories` where category_title= ?";
        $stmt =  $conn->prepare($select_query);
        $stmt->execute([$category_title]);
        $numver = $stmt->rowCount();
        if($numver>0){
            echo "<script>alert('Danh mục này đã có trong kho')</script>";

        }else{
            $insert_query="insert into `categories` (category_title) value(?)";
            $stmt = $conn->prepare($insert_query);
            $result = $stmt->execute([$category_title]);
            if($result){
                echo"<script>alert('Danh mục đã được thêm thành công!')</script>";
        }

        }
    }
}
function insertProducts(){
    global $conn;
    if(isset($_POST['insert_product'])){
        $product_title = htmlspecialchars($_POST['product_title']);
        $product_keywords = htmlspecialchars($_POST['product_keywords']);
        $product_category= htmlspecialchars($_POST['product_category']);
        $product_price = number_format($_POST['product_price']);
        
        //accessing images
        $product_image1 = $_FILES['product_image1']['name'];
    
        //accessing image tmp name
        $temp_image1 = $_FILES['product_image1']['tmp_name'];
      // check product exist
      $select_products = "select * from `products` where product_title = ?";
      $stmt=$conn->prepare($select_products);
      $stmt->execute([$product_title]);
      $row_products=$stmt->rowCount(); 
      if($row_products==0){
        //checking empty
        if(empty($product_title) or empty($product_keywords) or 
        empty($product_category) or empty($product_price) or
        empty($product_image1)){
            echo "<script>alert('Please fill all the available fields')</script>";
            exit();
        }else{
            move_uploaded_file($temp_image1,"./product_images/$product_image1");
            //insert query
            $insert_products = "insert into `products` (product_title,
            product_keywords,category_id,product_image1,product_price) values (?,?,?,?,?)";
             $stmt = $conn ->prepare($insert_products);
            $result_query =  $stmt->execute([$product_title,$product_keywords,$product_category,$product_image1,$product_price]);
            if($result_query){  
                echo "<script>alert('Thêm sản phẩm thành công!')</script>";
                echo "<script>window.open('./index.php?view_products','self')</script>";

            }
        }
    }else{
        echo "<script>alert('Sản phẩm đã tồn tại!!')</script>";
    }
}
}
function deleteCategories(){
global $conn;
    if(isset($_GET['delete_category'])){
        $get_category_id=$_GET['delete_category'];
        $delete_category="delete from `categories` where category_id = ?";
        $stmt=$conn->prepare($delete_category);
        $result_delete_category= $stmt->execute([$get_category_id]);
        if($result_delete_category){
            echo "<script>alert('Xóa thành công!')</script>";
            echo "<script>window.open('./index.php?insert_categories','_self')</script>";
        }
    }
}
function deleteProducts(){
global $conn;
if(isset($_GET['delete_products'])){
    $delete_id=$_GET['delete_products'];
    $delete_product="delete from `products` where product_id=?";
    $stmt= $conn->prepare($delete_product);
    $result_product=$stmt->execute([$delete_id]);
    if($result_product){
        echo "<script>alert('Xóa thành công!')</script>";
        echo "<script>window.open('./index.php?insert_products','_self')</script>";
    }
} 
}
function deleteUsers(){
    global $conn;
    if(isset($_GET['delete_users'])){
        $delete_id=$_GET['delete_users'];
        $delete_user="delete from `users` where user_id=?";
        $stmt= $conn->prepare($delete_user);
        $result_users=$stmt->execute([$delete_id]);
        if($result_users){
            echo "<script>alert('Xóa thành công!')</script>";
            echo "<script>window.open('./index.php?view_users','_self')</script>";
        }
    } 
}
function editProducts(){
    global $conn;
    if(isset($_POST['edit_product'])){
        $edit_id=$_GET['edit_products'];
        $product_title = htmlspecialchars($_POST['product_title']);
        $product_keywords = htmlspecialchars($_POST['product_keywords']);
        $product_category= htmlspecialchars($_POST['product_category']);
        $product_price = number_format($_POST['product_price']);
        
        //accessing images
        $product_image1 = $_FILES['product_image1']['name'];

    
        //accessing image tmp name
        $temp_image1 = $_FILES['product_image1']['tmp_name'];

    
        //checking empty
        if(empty($product_title) or empty($product_keywords) or 
        empty($product_category) or empty($product_price) or
        empty($product_image1)){
            echo "<script>alert('Please fill all the available fields')</script>";
            exit();
        }else{
            move_uploaded_file($temp_image1,"./product_images/$product_image1");
            //update query
            $update_product="update `products` set
            product_title=?,
            product_keywords=?,
            category_id = ?,
            product_image1=?,
            product_price=? where product_id=?";
            $stmt = $conn->prepare($update_product);
            $result_update = $stmt->execute([$product_title ,$product_keywords,$product_category,$product_image1,$product_price,$edit_id]);
            if($result_update){
                echo "<script>alert('Cập nhật thành công!')</script>";
                echo "<script>window.open('index.php?insert_products','_self')</script>";
            }
        }
    }
}
function editCat(){
    if(isset($_POST['edit_category'])){
        global $conn;
        $get_category_tt=htmlspecialchars($_POST['category_title']);
        $get_category_id=$_GET['edit_category'];
        $update_category="update `categories` set 
        category_title='$get_category_tt' where category_id = ?";
        $stmt=$conn->prepare($update_category);
        $result_category_tt = $stmt->execute([$get_category_id]);
        if($result_category_tt){
            echo "<script>alert('Cập nhật thành công!')</script>";
            echo "<script>window.open('./index.php?insert_categories','_self')</script>";
        }
    }
}
function userLog(){
    if(isset($_POST['user_login'])){
      global $conn;
      $user_username = htmlspecialchars($_POST['user_username']);
      $user_usermail = htmlspecialchars($_POST['user_username']);
      $user_password = htmlspecialchars($_POST['user_password']);
      if(!empty($_POST['user_admin_code'])){
      $user_code_admin = htmlspecialchars($_POST['user_admin_code']);
      $select_query="select * from `users` where user_name=? and user_code_admin = ?";
      $stmt = $conn->prepare($select_query);
      $stmt->execute([$user_username,$user_code_admin]);
      $row_count = $stmt-> rowCount();
      $row_data=$stmt->fetch(PDO::FETCH_ASSOC);
      if($row_count>0){
          $_SESSION['adminname'] = htmlspecialchars($user_username);
          if(password_verify($user_password,$row_data['user_password'])){
              if($row_count==1){
                  $_SESSION['adminname'] = htmlspecialchars($user_username);
                  echo "<script>alert('Đăng nhập quản lý thành công!')</script>";
                  echo "<script>window.open('index.php','_self')</script>";
              }else{
                  echo "<script>alert('Đăng nhập quản lý không thành công')</script>";
                  echo "<script>window.open('./../admin_areas/admin_log.php','_self')</script>";
          }
          }
          else{
              echo "<script>alert('Mật khẩu tên hoặc mã quản lý không đúng!')</script>";
      }
     
  }
  else{
      echo "<script>alert('Mật khẩu tên hoặc mã quản lý không đúng!')</script>";
  }
  }else{
    echo "<script>alert('Đăng nhập quản lý cần phải có mã quản lý!')</script>";
    echo "<script>window.open('./../admin_areas/admin_log.php','_self')</script>";
  }
    }
  }
function userReg(){
    if(isset($_POST['Register'])){
      global $conn;
      $user_username = htmlspecialchars($_POST['user_username']);
      $email = htmlspecialchars($_POST['user_email']);
      $user_password = htmlspecialchars($_POST['user_password']);
      $hash_password = password_hash($user_password,PASSWORD_DEFAULT);
      $conf_user_password= htmlspecialchars($_POST['conf_user_password']);
      $user_address = htmlspecialchars($_POST['user_address']);
      $user_phone = htmlspecialchars($_POST['user_phone']);
      if(!empty($_POST['user_code_admin'])){
      $user_code_admin = htmlspecialchars($_POST['user_code_admin']);
  //select_query
  $select_query = "select * from `users` where user_email= ? or user_code_admin = ?";
  $stmt = $conn->prepare($select_query);
  $stmt->execute([$email,$user_code_admin]);
  $row_count = $stmt -> rowCount();
  if($row_count>0){
      echo "<script>alert('Email hoặc mã quản lý đã tồn tại')</script>";
  }else{
   //checking empty
      if(empty($user_username) or empty($email) or empty($user_password) or 
      empty($conf_user_password) or empty($user_address) or empty($user_phone)){
          echo "<script>alert('Vui lòng điền đầy đủ thông tin!')</script>";
          exit();
      }else if($user_password != $conf_user_password){
          echo "<script>alert('Mật khẩu nhập lại cần phải trùng khớp với mật khẩu!')</script>";
          exit();
      }else{
       //insert query
          $insert_user = "insert into `users` (user_name,
          user_password,user_email,
          user_phone,user_address,user_code_admin) values (?,?,?,?,?,?)";
          $stmt=$conn->prepare($insert_user);
          $result = $stmt->execute([$user_username,$hash_password,$email,$user_phone,$user_address,$user_code_admin]); 
          if($result){
              echo "<script>alert('Bạn đã đăng ký quản lý thành công!')</script>";
              echo "<script>window.open('./../admin_areas/admin_log.php','_self')</script>";
          }
      }
  }
  }else{
    $select_query = "select * from `users` where user_email= ? ";
  $stmt = $conn->prepare($select_query);
  $stmt->execute([$email]);
  $row_count = $stmt -> rowCount();
  if($row_count>0){
      echo "<script>alert('Email đã tồn tại')</script>";
  }else{
   //checking empty
      if(empty($user_username) or empty($email) or empty($user_password) or 
      empty($conf_user_password) or empty($user_address) or empty($user_phone)){
          echo "<script>alert('Vui lòng điền đầy đủ thông tin!')</script>";
          exit();
      }else if($user_password != $conf_user_password){
          echo "<script>alert('Mật khẩu nhập lại cần phải trùng khớp với mật khẩu!')</script>";
          exit();
      }else{
       //insert query
          $insert_user = "insert into `users` (user_name,
          user_password,user_email,
          user_phone,user_address) values (?,?,?,?,?)";
          $stmt=$conn->prepare($insert_user);
          $result = $stmt->execute([$user_username,$hash_password,$email,$user_phone,$user_address]); 
          if($result){
              echo "<script>alert('Bạn đã đăng ký thành viên thành công!')</script>";
              echo "<script>window.open('./../../views/user_areas/user_login.php','_self')</script>";
          }
      }
  }
  }
  }
  }