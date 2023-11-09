<?php
global $conn;
    if(isset($_GET['edit_products'])){
        $edit_id=$_GET['edit_products'];
        $get_data = "select * from `products` where product_id= ?";
        $stmt = $conn->prepare($get_data);
        $stmt->execute([$edit_id]);
        $row=$stmt->fetch();
        $product_title=$row['product_title'];
        $product_keywords=$row['product_keywords'];
        $category_id=$row['category_id'];
        $product_image1=$row['product_image1'];
        $product_price=$row['product_price'];
// fetching category 
        $select_category="select * from `categories` where category_id= ?";
        $stmt = $conn->prepare($select_category);
        $stmt->execute([$category_id]);
        $row_category=$stmt->fetch();
        $category_title=$row_category['category_title'];
    }

?>

<div class="container mt-3">
    <h1 class="text-center text-dark">Chỉnh Sửa Sản Phẩm</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline w-50 m-auto mt-3">
            <lable for="product_title" class="form-label">Tên SP</lable>
            <input value="<?php echo $product_title ?>" type="text" id="product_title" name="product_title"
                class="form-control" required="required">
        </div>
        <div class="form-outline w-50 m-auto  mt-4">
            <lable for="product_keywords" class="form-label">Từ Khóa</lable>
            <input value="<?php echo $product_keywords ?>" type="text" id="product_keywords" name="product_keywords"
                class="form-control" required="required">
        </div>
        <div class="form-outline mb-4 w-50 m-auto mt-4">
            <label for="product_category" class="form-label">Danh Mục</label>
            <select name="product_category" class="form-select">
                <option value="<?php echo $category_title ?>"> <?php echo $category_title ?></option>
                <?php
                        $select_category_all = " select * from `categories`";
                        $stmt = $conn->prepare($select_category_all);
                        $stmt->execute();
                        while($row_category_all =$stmt->fetch()){
                            $category_title = $row_category_all['category_title'];
                            $category_id = $row_category_all['category_id'];
                            echo "<option value='$category_id'>$category_title</option>";
                        }
                    ?>
            </select>
        </div>
        <div class="form-outline w-50 m-auto mb-4 mt-4">
            <label for="product_image1" class="form-label">Ảnh 1</label>
            <div class="d-flex">
                <input type="file" id="product_image1" name="product_image1" class="form-control w-90 m-auto"
                    required="required">
                <img src="./product_images/<?php echo $product_image1 ?>" alt="" class="edit_image">
            </div>
        </div>
        <div class="form-outline w-50 m-auto">
            <lable for="product_price" class="form-label">Giá</lable>
            <input value="<?php echo $product_price?>" type="text" id="product_price" name="product_price"
                class="form-control" required="required">
        </div>
        <div class="w-50 m-auto">
            <input type="submit" name="edit_product" value="Cập nhật" class="btn btn-info mb-3 px-3 mt-4">
        </div>
    </form>
</div>
<!-- editing products -->
<?php editProducts() ?>