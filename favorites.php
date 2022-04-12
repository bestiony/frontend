<?php session_start();
include_once "./snipets/varriables.php";
include_once "./snipets/functions.php";
include "./snipets/html_head.php";
?>

<body>

    <?php
    include "./snipets/header_and_cover.php";
    ?>


    <!-- -----------------------Cart Items ------------------ -->
    <div class="small-container cart_page">
        <h2 class="title">Favorites</h2>
        <table>
            <tr>
                <th>Products</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>


            <?php
            foreach ($products as $product) {
                if ($product['favorite'] == 1) {
                    $link = "ProductDetails.php?id=".$product['id'];
                    $image = "<a href='$link'><img src='".$product['photos'][0]."'></a>";
                    $name = "<a href='$link'><p>".$product['ModelName']."</p></a>";
                    echo "
                    <tr>
                        <td>
                            <div class='cart-info'>
                                $image
                                <div>
                                    $name
                                    <small>Price ".$product['price']."</small>
                                    <br>
                                    <a href='./microprocesses/favorite.php?favorite=remove&id=".$product['id']."'>Remove</a>
                                </div>
                            </div>
                        </td>
                        
                    </tr>
                    
                    ";
                }
            }

            ?>
            
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Total</td>
                    <td>$ 1200</td>
                </tr>
            </table>
        </div>
    </div>


    <!-- ------------------footer------------------  -->
    <?php
    include "./snipets/footer.php";
    ?>

    <!-- ---------------- scripts ---------------- -->
    <script src="./js/toggleMenu.js"></script>
    <script src="./js/blackCover.js"></script>
</body>

</html>
<?php include_once "./snipets/updateSession.php";?>