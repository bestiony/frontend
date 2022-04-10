<?php

function printProduct($product)
{   
    $cartLink ="add";
    $cartIcon = "";
    $favoriteLink = "add";
    $favIcon = "fa fa-heart-o";
    $showIcon = "";

    if ($product['favorite']>0){
        $favoriteLink = "remove";
        $favIcon = "fa fa-heart";
        $showIcon = "style='opacity: 1;'";
    }
    
    if (in_array($product['id'], $_SESSION['cart'])){
        $cartLink = "";
        $cartIcon = "style='color: #D21F3C;'";
    }

    $link = "ProductDetails.php?id=".$product['id'];
    $image = "<a href='$link'><img src='".$product['photos'][0]."'></a>";
    $title = "<a href='$link'><h4>".substr($product['title'],0,21)."</h4></a>";
    echo "
        <div class='col-5 product-box'>
            <div class='product_photo'>
            $image
            </div>
            <div>
            <div ".$showIcon." class='favorite'>
                <a href ='./microprocesses/favorite.php?favorite=".$favoriteLink."&id=".$product['id']."'>
                <i class='".$favIcon."'></i></a>
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
            <a class='add_to_cart' href='./microprocesses/cart_add_remove.php?cart=".$cartLink."&id=".$product['id']."'>
                <i ".$cartIcon." class='fa fa-cart-plus'></i>
            </a>
            </div>
        </div>
        ";
}
