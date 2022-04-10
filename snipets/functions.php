<?php

function printProduct($product)
{   
    $link = "productdetails.php?id=".$product['id'];
    $image = "<a href='$link'><img src='".$product['photos'][0]."'></a>";
    $title = "<a href='$link'><h4>".substr($product['title'],0,21)."</h4></a>";
    echo "
        <div class='col-5 product-box'>
            <div class='product_photo'>
            $image
            </div>
            <div>
            <div class='favorite'>
                <i class='fa fa-heart-o'></i>
            </div>
            $title
            <p>" . substr($product['top'], 0, 15) . "...</p>
            <div class='rating'>
                <i class='fa fa-star'></i>
                <i class='fa fa-star'></i>
                <i class='fa fa-star'></i>
                <i class='fa fa-star'></i>
                <i class='fa fa-star'></i>
            </div>
            <div class='price'>
                <div class='upper'>$</div><span>" . $product['price'] . "</span>
            </div>
            <a class='add_to_cart' href=''>
                <i class='fa fa-cart-plus'></i>
            </a>
            </div>
        </div>
        ";
}
