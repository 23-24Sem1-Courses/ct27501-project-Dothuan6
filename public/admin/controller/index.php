<?php
  include_once __DIR__ . '/../../../public/view/db_connect.php';
  include_once __DIR__. '/../model/commonfunction.php';
  @session_start();
?>
<?php 
include_once('./../view/header.php'); 
include_once('./../view/side_nav.php');
?>
<div class="container-fluid mt-3">
    <?php
if(isset($_SESSION['adminname'])){
  if(isset($_GET['action'])){
    switch($_GET['action']){
      case 'view_users':
        include_once('./../view/view_users.php');
        break;
        case 'insert_categories':
          include_once('./../view/insert_categories.php');
          break;
          case 'insert_products':
            include_once('./../view/insert_products.php');
            break;
    }
  }
  if(isset($_GET['delete_products'])){
    deleteProducts();
  }if(isset($_GET['delete_user'])){
    deleteUsers();
  }if(isset($_GET['edit_products'])){
      include_once('./../view/edit_products.php');
  }if(isset($_GET['edit_category'])){
    include_once('./../view/edit_categories.php');
}if(isset($_GET['delete_category'])){
  deleteCategories();
}
  }else{
  echo "<div class='alert alert-warning' role='alert'>
  Bạn vui lòng đăng nhập để sử dụng các chức năng của quản lý!
</div>
";
}
?>
</div>
<?php
include_once('./../view/footer.php');
?>