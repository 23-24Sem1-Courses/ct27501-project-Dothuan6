<?php
    include_once __DIR__ . '/../../includes/db_connect.php';
    include_once __DIR__ . '/../../controller/commonfunction.php';
    global $conn;
    insertCategories();
?>
<h2 class="text-center text-primary">Thêm Danh Mục</h2>
<form action="" method="post" class="mb-2">
    <div class="input-group mb-2 text-center w-50">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="cat_title" placeholder="Nhập vào tên danh mục"
            aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-2 m-auto">
        <input type="submit" class="bg-warning text-dark p-2 my-3 border-0 shadow" name="insert_cat"
            value="Thêm vào kho">
        <!-- <button class="bg-info p-2 my-3 border-0">Insert Categories</button> -->
    </div>
</form>
<h3 class="text-center text-primary py-2">Tất Cả Danh Mục</h3>
<table class="table table-bordered mt-5 text-center shadow">
    <thead>
        <tr>
            <th class="bg-dark text-white">STT</th>
            <th class="bg-dark text-white">Tên Danh Mục</th>
            <th class="bg-dark text-white">Chỉnh Sửa</th>
            <th class="bg-dark text-white">Xóa</th>
        </tr>
    </thead>
    <tbody>
        <?php
        global $conn;
        $get_products="select * from `categories`";
        $stmt = $conn->prepare($get_products);
        $stmt->execute();
        $number=0;
        while($row=$stmt->Fetch()){
            $number++;      
            $category_title=$row['category_title'];
            $category_id=$row['category_id'];
            ?>

        <tr>
            <td class='bg-secondary text-light'><?php echo $number ?></td>
            <td class='bg-secondary text-light'><?php echo $category_title ?></td>
            <td class='bg-secondary text-light text-center'><a class='text-light'
                    href='index.php?edit_category=<?php echo $category_id ?>'><i class='fa-solid
            fa-pen-to-square'></i></a></td>
            <td class='bg-secondary text-light'><a onclick='return confirm("Bạn chắn chắn muốn xóa sản phẩm này?")'
                    class='text-light' href='index.php?delete_category=<?php echo $category_id ?> '><i class='fa-solid
            fa-trash'></i></a></td>
        </tr>
        <?php 
        }
        ?>
    </tbody>
</table>