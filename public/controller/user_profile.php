<?php
  include_once __DIR__ . '/../view/db_connect.php';
  include_once __DIR__ . '/../model/function.php';
  @session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xin Chào <?php echo $_SESSION['username']; ?></title>
    <link rel="stylesheet" href="../../css/style">
    <style>

    </style>
</head>

</html>
<?php
include_once('./../view/header.php');
include_once('./../view/user_profile.php'); 
?>