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
            echo "<script>window.open('./index.php?insert_products','_self')</script>";
        }
    } 
}
?>