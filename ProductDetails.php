<?php session_start();
include "./snipets/html_head.php";
?>

<body>

    <?php
    include "./snipets/header_and_cover.php";
    ?>

    <!-- -------------------- Single Product Details -------------------- -->

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2 product-images">
                <div class="small-img-col">
                    <div class="small-img-row">
                        <img src="./images/macbook.jpg" width="100%" class="small_img">
                    </div>
                    <div class="small-img-row">
                        <img src="./images/macbook1.jpg" width="100%" class="small_img">
                    </div>
                    <div class="small-img-row">
                        <img src="./images/macbook2.jpg" width="100%" class="small_img">
                    </div>
                    <div class="small-img-row">
                        <img src="./images/macbook3.jpg" width="100%" class="small_img">
                    </div>
                    
                </div>
                <img src="./images/macbook.jpg" width="100%" id="big_img">
            </div>
            <div class="col-2">
                <p>Inducstry Leading Perdormance</p>
                <h1>2022 Apple MacBook Pro</h1>
                <div class="price big-price">
                    <div class="upper">$</div><span>1200</span>
                </div>
                <!-- <p>Capacity</p> -->
                <!-- <div class="size-btn">
                    <span>512 GB</span>
                    <span>1 TB</span>
                </div> -->
                <form action="">
                    <input type="hidden" name="id" value="">
                    <input type="number" name="quantity" value="1" id="">
                    <button class="btn" type="submit" name="addToCart" value="add">Add to Cart</button>
                </form>
                <h3>Product Details</h3>
                <br>
                <div class="table_details">
                    <table>
                        <tr>
                            <td class="table-left-col">Model Name</td>
                            <td class="table-right-col">MacBook Pro</td>
                        </tr>
                        <tr>
                            <td class="table-left-col">Brand</td>
                            <td class="table-right-col">Apple</td>
                        </tr>
                        <tr>
                            <td class="table-left-col">Color</td>
                            <td class="table-right-col">Space Gray</td>
                        </tr>
                        <tr>
                            <td class="table-left-col">Screen Size</td>
                            <td class="table-right-col">14.2 Inches</td>
                        </tr>
                        <tr>
                            <td class="table-left-col">Hard Disk Size</td>
                            <td class="table-right-col">512 Gb</td>
                        </tr>
                        
                    </table>
                </div>
                <br>
                <h4>Description</h4>
                <p>it's very cool the CPU is out of this world. you can do all sorts of shit with it 
                    it's literaly a phone CPU slapped into a laptop no a MacBook Pro
                </p>
            </div>
        </div>

    </div>
    <!-- ------------ Related Products ----------------- -->


    <div class="small-container">
        <div class="row row-2">
        <h2>Related Products</h2>
        <p>View More</p>
        </div>
        <div class="row">
            <div class="col-5">
                <img src="./images/macbook.jpg" alt="">
                <h4>MacBook Pro,M1</h4>
                <p>really good</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <!-- <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i> -->
                </div>
                <div class="price">
                    <div class="upper">$</div><span>1200</span>
                </div>
                <a class="add_to_cart" href=""><i class="fa fa-cart-plus"></i></a>
            </div>
        </div>
    </div>



    <!-- ------------------footer------------------  -->
    <?php
    include "./snipets/footer.php";
    ?>

    <!-- ---------------- scripts ---------------- -->
    <script src="./js/toggleMenu.js" ></script>
    <script src="./js/blackCover.js" ></script>
    <script src="./js/product_small_image_toggle.js"></script>
    
</body>

</html>