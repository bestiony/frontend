<?php session_start();
include_once "../snipets/varriables.php";
include_once "../snipets/functions.php";
if (!(isset($_GET['cart']) && isset($_GET['id']))){
    include "../snipets/404.php";
    exit;
}

$id = $_GET['id'];
$decision = $_GET['cart'];

if($decision == "add"){
    $cart[$id]= $id;
} else if ($decision == "remove"){
    unset($cart[$id]);
}
include_once "../snipets/updateSession.php";

header("location:".$queryList[count($queryList)-2]);