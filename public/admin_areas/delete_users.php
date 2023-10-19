<?php
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
?>