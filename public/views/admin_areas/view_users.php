<h3 class="text-center text-primary">Tất Cả Khách Hàng</h3>
<table class="table table-bordered mt-5">
    <?php
    global $conn;
    $get_users="select * from `users`";
    $result_users=$conn->prepare($get_users);
    $result_users->execute();
    $num = $result_users->rowCount();
    if($num==0){
        echo "<div class='alert alert-success' role='alert'>
        Chưa có người dùng nào đăng ký!
      </div>";
    }else{
    echo"
    <thead>
        <tr>
            <th class='bg-dark text-center text-white'>STT</th>
            <th class='bg-dark text-center text-white'>Tên</th>
            <th class='bg-dark text-center text-white'>Địa Chỉ Email</th>
            <th class='bg-dark text-center text-white'>Địa Chỉ</th>
            <th class='bg-dark text-center text-white'>Số Điện Thoại</th>
            <th class='bg-dark text-center text-white'>Xóa</th>
        </tr>
    </thead>
    <tbody>";
        
         $get_users="select * from `users`";
         $result_users=$conn->prepare($get_users);
         $result_users->execute();
         $number=0;
        $row_count=$result_users->rowCount();
        if($row_count==0){
            echo "<script>alert('Không có người dùng nào')</script>";
           
        }else{
            while($row_data=$result_users->fetch()){
                $user_id = $row_data['user_id'];
                $usernamer=$row_data['user_name'];
                $user_email=$row_data['user_email'];
                $user_address=$row_data['user_address'];
                $user_mobile=$row_data['user_phone'];
                $number++;
                ?>

    <tr>
        <td class='text-center text-light bg-secondary'><?php echo $number ?></td>
        <td class='text-center text-light bg-secondary'><?php echo $usernamer ?></td>
        <td class='text-center text-light bg-secondary'><?php echo $user_email ?></td>
        <td class='text-center text-light bg-secondary'><?php echo $user_address ?></td>
        <td class='text-center text-light bg-secondary'><?php echo $user_mobile ?></td>
        <td class='bg-secondary text-light text-center'><a
                onclick='return confirm("Bạn chắn chắn muốn xóa người dùng này?")'
                href='./index.php?delete_users=<?php echo $user_id ?>'>
                <i class='fa-solid fa-trash text-light'></i></a></td>
    </tr>
    </tbody>
    <?php 
    }
    }
    }
    ?>
</table>