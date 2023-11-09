<?php 
@session_start();
include_once __DIR__ . '/../view/db_connect.php';
include_once __DIR__ .'/../model/function.php';
order();
?>