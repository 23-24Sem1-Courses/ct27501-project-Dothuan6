<?php 
@session_start();
include_once __DIR__ . '/../../../includes/db_connect.php';
include_once __DIR__ .'/../../../public/controllers/function.php';
order();
?>