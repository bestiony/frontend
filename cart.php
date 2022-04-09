<?php session_start();
include "./snipets/html_head.php";
?>

<body>

    <?php
    include "./snipets/header_and_cover.php";
    ?>


<!-- -----------------------Cart Items ------------------ -->
    <div class="small-container cart_page">
        <table>
            <tr>
                <th>Products</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="./images/macbook.jpg" alt="">
                        <div>
                            <p>Mac Book Pro</p>
                            <small>Price $1200</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$1200</td>
            </tr>
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