<div class="row">
    <h1 class="text-center text-primary">THÊM SẢN PHẨM</h1>
    <div class="col-md-6 col-sm col-lg-6 mt-4">


        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">
            <!--product title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Tên sản phẩm</label>
                <input type="text" name="product_title" id="product_title" class="form-control"
                    placeholder="Nhập vào tên sản phẩm..." autocomplete="off" required="required">
            </div>
            <!-- Keywords -->

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label mt-2">Từ khóa</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control"
                    placeholder="Nhập vào từ khóa..." autocomplete="off" required="required">
            </div>

            <!-- categories  -->
            <div class="py-2 mt-2">
                <div class="form-outline mb-4 w-50 m-auto">
                    <select name="product_category" id="" class="form-select">
                        <option value="">Chọn danh mục</option>
                        <?php
                        global $conn;
                        $select_query = " select *from `categories`";
                        $stmt = $conn->prepare($select_query);
                        $stmt->execute();
                        while($row = $stmt->fetch()){
                            $category_title = $row['category_title'];
                            $category_id = $row['category_id'];
                            echo "<option value='$category_id'>$category_title</option>";
                        }
                    ?>
                    </select>
                </div>
            </div>
    </div>
    <div class="col-md-6 col-sm col-lg-6 mt-4">
        <!-- image 1 -->
        <div class="py-2">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Ảnh 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" quired="required">
            </div>
        </div>
        <!-- Price -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_price" class="form-label">Giá tiền</label>
            <input type="text" name="product_price" id="product_price" class="form-control"
                placeholder="Nhập vào giá tiền..." autocomplete="off" required="required">
        </div>

        <!-- submit -->
        <div class="py-3 text-center">
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Thêm sản phẩm">
            </div>
        </div>
        </form>
    </div>
</div>
<?php
    if(isset($_POST['insert_product'])){
        $product_title = $_POST['product_title'];
        $product_keywords = $_POST['product_keywords'];
        $product_category= $_POST['product_category'];
        $product_price = number_format($_POST['product_price']);
        $product_status = 'true';
        
        //accessing images
        $product_image1 = $_FILES['product_image1']['name'];
    
        //accessing image tmp name
        $temp_image1 = $_FILES['product_image1']['tmp_name'];
      // check product exist
      $select_products = "select * from `products` where product_title = ?";
      $stmt=$conn->prepare($select_products);
      $stmt->execute([$product_title]);
      $row_products=$stmt->rowCount(); 
      if($row_products==0){
        //checking empty
        if(empty($product_title) or empty($product_keywords) or 
        empty($product_category) or empty($product_price) or
        empty($product_image1)){
            echo "<script>alert('Please fill all the available fields')</script>";
            exit();
        }else{
            move_uploaded_file($temp_image1,"./product_images/$product_image1");
            //insert query
            $insert_products = "insert into `products` (product_title,
            product_keywords,category_id,product_image1,product_price) values (?,?,?,?,?)";
             $stmt = $conn ->prepare($insert_products);
            $result_query =  $stmt->execute([$product_title,$product_keywords,$product_category,$product_image1,$product_price]);
            if($result_query){  
                echo "<script>alert('Thêm sản phẩm thành công!')</script>";
                echo "<script>window.open('./index.php?view_products','self')</script>";

            }
        }
    }else{
        echo "<script>alert('Sản phẩm đã tồn tại!!')</script>";
    }
}
    ?>

<h3 class="text-center text-primary">TẤT CẢ SẢN PHẨM</h3>
<table class="table table-bordered mt-5 text-center">
    <thead>
        <tr>
            <th class="bg-info">STT</th>
            <th class="bg-info">Tên Sản Phẩm</th>
            <th class="bg-info">Hình Ảnh</th>
            <th class="bg-info">Giá</th>
            <!-- <th class="bg-info">Số Lượng Bán</th> -->
            <!-- <th class="bg-info">Trạng Thái</th> -->
            <th class="bg-info">Chỉnh Sửa</th>
            <th class="bg-info">Xóa</th>
        </tr>
    </thead>
    <tbody>
        <?php
        global $conn;
        $get_products="select * from `products`";
        $stmt = $conn->prepare($get_products);
        $stmt->execute();
        // $result = mysqli_query($con,$get_products);
        $number=0;
        while($row=$stmt->fetch()){
            $product_id=$row['product_id'];
            $product_title=$row['product_title'];
            $product_image1=$row['product_image1'];
            $product_price=$row['product_price'];
            // $product_status=$row['status'];
            // if($row['status']=='true'){
            //   $product_status ='Còn hàng';
            // }
            $number++;
            ?>
        <tr>
            <td class='bg-secondary text-light'><?php echo $number ?></td>
            <td class='bg-secondary text-light'><?php echo $product_title ?></td>
            <td class='bg-secondary text-light img'><img src='./product_images/<?php echo $product_image1 ?>'
                    class='product_images shadow'></td>
            <td class='bg-secondary text-light'><?php echo "$product_price VND" ?></td>
            <td class='bg-secondary text-light text-center'><a class='text-light'
                    href='index.php?edit_products=<?php echo $product_id ?>'><i class='fa-solid
                     fa-pen-to-square'></i></a></td>
            <td class='bg-secondary text-light'><a onclick='return confirm("Bạn chắn chắn muốn xóa sản phẩm này?")'
                    type='button' class='btn text-light' class='text-light'
                    href='index.php?delete_products=<?php echo $product_id ?>'><i class='fa-solid
            fa-trash'></i></a></td>
        </tr>
        <?php 
        }
        ?>
    </tbody>
</table>