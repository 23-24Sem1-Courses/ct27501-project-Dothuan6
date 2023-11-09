<body>
    <div class="container-fluid">
        <div class="container-fluid">
            <!-- navbar -->
            <?php
            ?>
            <h3 class="text-center py-3">Chi tiết giỏ hàng</h3>
            <div class="container">
                <div class="row">
                    <?php 
        if(!isset($_SESSION['username'])){
            include_once('user_login.php');
        }else{
            include_once('payment.php');
        }
        ?>
                </div>
            </div>
        </div>
    </div>
</body>