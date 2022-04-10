<?php session_start();
include_once "./snipets/varriables.php";
include "./snipets/html_head.php";
?>

<body>

    <?php
    include "./snipets/header_and_cover.php";
    ?>


<!-- -----------------------Cart Items ------------------ -->
    <div class="small-container cart_page">
        <h2 class="title">Shopping Cart</h2>
        <table>
            <tr>
                <th>Products</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>

            <?php
            foreach ($cart as $item) {
                $product = $products[$item];
                    echo "
                    <tr>
                        <td>
                            <div class='cart-info'>
                                <img src='".$product['photos'][0]."' >
                                <div>
                                    <p>".$product['ModelName']."</p>
                                    <small>Price $".$product['price']."</small>
                                    <br>
                                    <a href='./microprocesses/cart_add_remove.php?cart=remove&id=".$product['id']."'>Remove</a>
                                </div>
                            </div>
                        </td>
                        <td><input id type='number' value='1'></td>
                        <td>$".$product['price']."</td>
                    </tr>
                    
                    ";
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
    <script src="./js/toggleMenu.js" ></script>
    <script src="./js/blackCover.js" ></script>
</body>

</html>
<?php include_once "./snipets/updateSession.php";?>