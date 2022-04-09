<?php session_start();
include "./snipets/html_head.php";
?>

<body>

    <?php
    include "./snipets/header_and_cover.php";
    ?>


    <!-- :: TEMPORARY -->
    <!-- <div class="cover-container">
        <div id="cover" class="cover-focus"></div>
    </div> -->

    <div class="area" id="background">
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

    <!-- ----------------- add product form ----------------------->
    <div class="small-container add_product_form">
        <h2>Add a New Product</h2>
        <div class="row">
            <div class="col-2">
                <form action="">
                    <div class="drop-down">
                        <span>Categories</span>
                        <select name="category" id="">
                            <option value="Laptops">Laptops</option>
                            <option value="Desktop">Desktop</option>
                            <option value="Monitors">Monitors</option>
                            <option value="Graphic_Cards">Graphic Cards</option>
                        </select>
                    </div>
                    <input type="text" placeholder="Title" name="title">
                    <input type="text" placeholder="Model name" name="model_name">
                    

                    <input type="text" placeholder="Brand" name="brand">
                    <input type="number" id="" placeholder="Price $" name="price">
                    <input type="text" placeholder="color" name="color">
                    <textarea id="" cols="30" rows="10" placeholder="Description" name="description"></textarea>
                    <div class="images_urls">
                        <input onblur="showphoto(url,show),showphoto(url,image1)" id="url" type="url"
                            name="image-links[]" placeholder="image 1 url" title="please use a valid img url">
                        <input onblur="showphoto(url2,image2)" id="url2" type="url" name="image-links[]"
                            placeholder="image 2 url" title="please use a valid img url">
                        <input onblur="showphoto(url3,image3)" id="url3" type="url" name="image-links[]"
                            placeholder="image 3 url" title="please use a valid img url">
                        <input onblur="showphoto(url4,image4)" id="url4" type="url" name="image-links[]"
                            placeholder="image 4 url" title="please use a valid img url">

                    </div>
                    <button type="submit" class="btn" name="submit" value="submit">Publish</button>
                </form>
            </div>

            <div class="col-2">
                <div class="small-img-col">
                    <div class="small-img-row"><img src="./images/imageholder.png" alt="" id="image1"></div>
                    <div class="small-img-row"><img src="./images/imageholder.png" alt="" id="image2"></div>
                    <div class="small-img-row"><img src="./images/imageholder.png" alt="" id="image3"></div>
                    <div class="small-img-row"><img src="./images/imageholder.png" alt="" id="image4"></div>
                </div>
                <div class="big-img-col">
                    <img id="show" src="./images/imageholder.png" alt="">
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
    <script src="./js/add_product_photo_urls.js"></script>

</body>

</html>