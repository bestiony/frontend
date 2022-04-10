<?php session_start();
include_once "./snipets/varriables.php";
include_once "./snipets/functions.php";
if (empty($products)){
    include_once "./snipets/404.php";
    exit;
}

if (strlen($_SERVER['QUERY_STRING'])== 0){

}

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
                    <?php 
                        foreach($brands as $name){
                            echo "<a href=''><i class='fa fa-square-o'></i> $name</a>";
                        }
                    ?>
                    
                </div>
            </div>

            <!-- --------------------  Products -------------------- -->
                <div class="row All-products-row" id="popular_products">

                    <?php 
                    foreach ($products as $product){
                        printProduct($product);
                    }
                    
                    ?>

                
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