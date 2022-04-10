<?php session_start();

//----------- reused data ----------------

include_once "./snipets/varriables.php";



//------------ first timers ------------------

// -****--------DATA--------------**
// fetch data
if (!isset($_SESSION['products'])) {
    $data = fopen("./data/storedata.csv", "r");

    // store data
    $keys = fgetcsv($data);
    $details = array();

    // ---------- organise data 
    while (!feof($data)) {
        $details[] = fgetcsv($data);
    }

    // make an array of arrays that have $keys values as their key
    foreach ($details as $index => $single_product) {
        $detail_index = 0;
        foreach ($keys as $key) {
            if ($key == "photos"){
                $photos = json_decode($single_product[$detail_index],true);
                $products[$index][$key] = $photos;
                $detail_index++;
                continue;
            }
            $products[$index][$key] = $single_product[$detail_index];
            $detail_index++;
        }
    }


    // ****----SESSION VARRIABLES -----**

    // fill special arrays to keep track of different aspcets freely
    foreach ($products as $id => $product) {
        // ------ make favorites
        // set all products to be not in favorites 
        $product['favorite'] = 0;

        //------- make categories--------
        // get all categories names
        if (empty($categories)) {
            $categories[] = $product['category'];
        } else if (!in_array($product['category'], $categories)) {
            $categories[] = $product['category'];
        }

        // --------- make brands 

        if (empty($brands)) {
            $brands[] = $product['brand'];
        } else if (!in_array($product['brand'], $brands)) {
            $brands[] = $product['brand'];
        }

        // -------- make prices 
        $prices[$id] = $product['price'];
        
    }
}















// update the session array with the needed special arrays and vaariables 
$_SESSION['products'] = $products;
$_SESSION['categories'] = $categories;
$_SESSION['brands'] = $brands;
$_SESSION['cart'] = $cart;
$_SESSION['prices'] = $prices;




// ------------- debugger -------------

// echo "<pre>";
// print_r($prices);
// print_r($categories);
// print_r($brands);
// print_r($products);
// print_r($details);
// print_r($_SESSION['products']);
// print_r($_SESSION);



// ::TODO : you might have to move this or change the "r" above to save changes
if (isset($data)) {
    fclose($data);
}
