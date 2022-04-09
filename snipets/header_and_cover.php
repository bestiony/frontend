<div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="./images/logo.png" />
                </div>
                <div class="searchbar">
                    <form action="" class="search">
                        <input onclick="setVisible('visible')" onblur="setVisible('hidden')" id="searchInput" type="text" name="searchwords" placeholder="what can we get you first?" />
                        <a href="" class="searchbtn"><i class="fa fa-search"></i> </a>
                    </form>
                </div>
                <nav>
                    <ul id="menu_items">
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./Products.php">Browse Products</a></li>
                        <li><a href="./favorites.php">My Favorites</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                        <li><a href="./account.php">Account</a></li>
                    </ul>
                </nav>
                <div class="cart">
                    <a href="./cart.php"><img src="./images/cart.png"  /></a>
                </div>
                <div class="menu-icon" onclick="toggleMenu()">
                    <img  src="./images/menu.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="header-space"></div>
    <div id="cover" class="cover-focus"></div>