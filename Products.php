<?php session_start();
include "./snipets/html_head.php";
?>

<body>

    <?php
    include "./snipets/header_and_cover.php";
    ?>

    <div class="small-container">
        <div class="row row-2">
            <h2>All Products</h2>

            <div class="drop-down">
                <span>Sort by</span>
                <select name="" id="">
                    <option value="">Default</option>
                    <option value="">Price ( high to low )</option>
                    <option value="">Price ( low to high )</option>
                    <option value="">Rating</option>
                    <option value="">Popularity</option>
                    <option value="">Sales</option>
                </select>
            </div>
            <div class="page-btns">
                <span>&#8592;</span>
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
                <span>&#8594;</span>
            </div>
        </div>
        <div class="row">
            <div class="tall-row">
                <h3>CPU Brands</h3>
                <div class="row">
                    <a href=""><i class="fa fa-square-o"></i> intel</a>
                    <a href=""><i class="fa fa-square-o"></i> AMD</a>
                </div>
                <hr>
                <h3>Brands</h3>
                <div class="row">
                    <a href=""><i class="fa fa-square-o"></i> ASUS</a>
                    <a href=""><i class="fa fa-square-o"></i> Lenovo</a>
                    <a href=""><i class="fa fa-square-o"></i> Acer</a>
                    <a href=""><i class="fa fa-square-o"></i> hp</a>
                    <a href=""><i class="fa fa-square-o"></i> DELL</a>
                    <a href=""><i class="fa fa-square-o"></i> MSI</a>
                </div>
            </div>

            <!-- --------------------  Products -------------------- -->
                <div class="row All-products-row">
                    <div class="col-3">
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
                    <div class="col-3">
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
                    <div class="col-3">
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
            <div class="page-btns">
                <span>&#8592;</span>
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
                <span>&#8594;</span>
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