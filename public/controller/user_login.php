<?php
include_once __DIR__ . '/../view/db_connect.php';
include_once __DIR__ . '/../model/function.php';
@session_start();
?>
<?php
include_once('./../view/header.php');
include_once('./../view/user_login.php');
userLog();
?>