<?php session_start();
include "./snipets/html_head.php";
?>

<body>

    <?php
    include "./snipets/header_and_cover.php";
    ?>

    <!-- ------------ background --------------- -->
    <div class="area homepage-bg" id="indexbg">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!-- ----------------slideshow------------------- -->

    <div class="slideshow container">
        <div class="row">
            <div class="col-2">
                <h1>
                    Your Ultimate<br />
                    Gaming Pc <br />Awaits!
                </h1>
                <p>
                    Check out our amazing offers and level up your gaming experience
                    with latest hardwar technology has to to offer
                </p>
                <a href="" class="btn">Let's Play <i class="fa fa-long-arrow-right"></i>
                </a>
            </div>
            <div class="col-2">
                <img src="./images/case.png" alt="" />
            </div>
        </div>
    </div>

    <!-- ------------------ categories ------------------ -->
    <div class="small-container">
        <h2 class="title">Categories</h2>
        <div class="row">
            <div class="col-4">
                <img src="./images/images_CategoryImages_laptops500.jpg">
                <h4>Laptops</h4>
            </div>
            <div class="col-4">
                <img src="./images/images_CategoryImages_desktops500.jpg">
                <h4>Desktop</h4>
            </div>
            <div class="col-4">
                <img src="./images/images_CategoryImages_monitors2500.jpg">
                <h4>Monitors</h4>
            </div>
            <div class="col-4">
                <img src="./images/images_CategoryImages_videoCards500.jpg">
                <h4>Graphic Cards</h4>
            </div>
        </div>
    </div>

    <!-- -------------------- Popular Products -------------------- -->
    <div class="small-container">
        <h2 class="title">Popular Products</h2>
        <div class="row">
            <div class="col-5 product-box">
                <img src="./images/macbook.jpg" alt="">
                <div class="favorite">
                    <i class="fa fa-heart-o"></i>
                </div>
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

    <!-- ----------------------- offer ----------------------- -->
    <div class="area homepage-bg" id="indexbg">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img class="offer-image" src="./images/deal.png" alt="">
                </div>
                <div class="col-2">
                    <p>get the best deal ever</p>
                    <h1><span style="background: #D21F3C;">3</span> <span style="background:#fff;color : black;">X</span> <span style="background: #D21F3C;">1</span> <br> The Best Gaming Combo</h1>
                    <small>get the latest gaming keyboard and we'll through in a kickass gaming mouse with it's
                        extreemly comfortable mat </small>
                    <br>
                    <a href="" class="btn">Buy Now</a>
                </div>
            </div>
        </div>
    </div>


    <!-- --------------------brands--------------------  -->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-6">
                    <a href=""><img src="./images/intel.png" alt=""></a>
                </div>
                <div class="col-6">
                    <a href=""><img src="./images/amd.png" alt=""></a>
                </div>
                <div class="col-6">
                    <a href=""><img src="./images/nv.png" alt=""></a>
                </div>
                <div class="col-6">
                    <a href=""><img src="./images/dell.png" alt=""></a>
                </div>
                <div class="col-6">
                    <a href=""><img src="./images/hp.png" alt=""></a>
                </div>
                <div class="col-6">
                    <a href=""><img src="./images/intel.png" alt=""></a>
                </div>

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
</body>

</html>