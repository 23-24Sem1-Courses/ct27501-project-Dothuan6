<?php
session_start();
session_unset();
session_destroy();
echo "<script>alert('Bạn đã đăng xuất khỏi tài khoản này!')</script>";
echo "<script>window.open('../../index.php','_self')</script>"
?>