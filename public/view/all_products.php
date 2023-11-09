<div class="container-fluid">
    <!--  -->
    <div class="row">
        <h3 class="text-center">TẤT CẢ SẢN PHẨM</h3>
    </div>
    <div class="container">
        <div class="row">
            <?php getallProducts() ?>

        </div>
    </div>
</div>
<center class='py-5 w-25 m-auto'>
    <nav aria-label='Page navigation example'>
        <ul class='pagination'>
            <li class='page-item'><a class='page-link' href='all_products.php?startRow=0'>Previous</a>
            </li>
            <li class='page-item'><a class='page-link' href='all_products.php?startRow=0'>1</a></li>
            <li class='page-item'><a class='page-link' href='all_products.php?startRow=5'>2</a></li>
            <li class='page-item'><a class='page-link' href='all_products.php?startRow=10'>3</a></li>
            <li class='page-item'><a class='page-link' href='all_products.php?startRow=15'>Next</a></li>
        </ul>
    </nav>
</center>