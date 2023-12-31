<div class="row">
    <h1 class="text-center">
        2TShop-CAR
    </h1>
    <!-- slider -->
    <div>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner" style="border-radius:2px;">
                <div class=" carousel-item active">
                    <img src="./../images/slider1.jpg" class="d-block w-100 img_slide" alt="ảnh">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>MERCEDES BEN</h5>
                        <a href="index.php?act=all_products" class="text-light" style="text-decoration: none;">Xem chi
                            tiết </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./../images/slider2.webp" class="d-block w-100 img_slide" alt="ảnh">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>MERCEDES BEN</h5>
                        <a href="index.php?act=all_products" class="text-light" style="text-decoration: none;">Xem chi
                            tiết </a>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./../images/slider1.jpg" class="d-block w-100 img_slide" alt="ảnh">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>MERCEDES BEN</h5>
                        <a href="index.php?act=all_products" class="text-light" style="text-decoration: none;">Xem chi
                            tiết </a>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./../images/slider2.webp" class="d-block w-100 img_slide" alt="ảnh">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>MERCEDES BEN</h5>
                        <a href="index.php?act=all_products" class="text-light" style="text-decoration: none;">Xem chi
                            tiết </a>

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<div class="container">
    <section class="product-section mt-3">
        <div class="section-heading py-2">
            <h3 class="heading px-5">MERCEDES GLC 2023
                <hr>
            </h3>
            <div class="row px-5">
                <?php getProductsGLC(); ?>
            </div>
        </div>
    </section>
    <section class="product-section mt-3">
        <div class="section-heading py-5">
            <h3 class="heading px-5">MERCEDES C-CLASS
                <hr>
            </h3>
            <div class="row px-5">
                <?php getProductsCLASS(); ?>
            </div>
        </div>
    </section>
    <section class="product-section mt-3">
        <div class="section-heading py-5">
            <h3 class="heading px-5">MERCEDES MAYBACH
                <hr>
            </h3>
            <div class="row px-5">
                <?php getProductsMAYBACH(); ?>
            </div>
        </div>
    </section>
    <section class="product-section mt-3">
        <div class="section-heading py-5">
            <h3 class="heading px-5">MERCEDES G-CLASS
                <hr>
            </h3>
            <div class="row px-5">
                <?php getProductsGCLASS(); ?>
            </div>
        </div>
    </section>
</div>