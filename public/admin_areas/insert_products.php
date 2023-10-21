<?php
include_once __DIR__ . '/../../controller/commonfunction.php'; 
?>

<div class="row">
    <h1 class="text-center text-primary">THÊM SẢN PHẨM</h1>
    <div class="col-md-6 col-sm col-lg-6 mt-4">


        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">
            <!--product title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label text-warning">Tên sản phẩm</label>
                <input type="text" name="product_title" id="product_title" class="form-control"
                    placeholder="Nhập vào tên sản phẩm..." autocomplete="off" required="required">
            </div>
            <!-- Keywords -->

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label mt-2 text-warning">Từ khóa</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control"
                    placeholder="Nhập vào từ khóa..." autocomplete="off" required="required">
            </div>

            <!-- categories  -->
            <div class="py-2 mt-2">
                <div class="form-outline mb-4 w-50 m-auto">
                    <select name="product_category" id="" class="form-select text-warning">
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
                <label for="product_image1" class="form-label text-warning">Ảnh 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" quired="required">
            </div>
        </div>
        <!-- Price -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_price" class="form-label text-warning">Giá tiền</label>
            <input type="text" name="product_price" id="product_price" class="form-control"
                placeholder="Nhập vào giá tiền..." autocomplete="off" required="required">
        </div>

        <!-- submit -->
        <div class="py-3 text-center">
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn mb-3 px-3 bg-warning text-white"
                    value="Thêm sản phẩm">
            </div>
        </div>
        </form>
    </div>
</div>
<?php
     insertProducts();
?>

<h3 class="text-center text-primary">TẤT CẢ SẢN PHẨM</h3>
<table class="table table-bordered mt-5 text-center">
    <thead>
        <tr>
            <th class="bg-dark text-white">STT</th>
            <th class="bg-dark text-white">Tên Sản Phẩm</th>
            <th class="bg-dark text-white">Hình Ảnh</th>
            <th class="bg-dark text-white">Giá</th>
            <th class="bg-dark text-white">Chỉnh Sửa</th>
            <th class="bg-dark text-white">Xóa</th>
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