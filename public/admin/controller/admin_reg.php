<?php
  include_once __DIR__ . '/../../../public/view/db_connect.php';
  include_once __DIR__. '/../model/commonfunction.php';
  @session_start();
?>

<?php
include_once('./../view/admin_reg.php');
userReg();
?>