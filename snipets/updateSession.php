<?php
$show = $_SESSION['show'] ?? $products;

$_SESSION['products'] =$products ;

$_SESSION['cart']= $cart  ;

$_SESSION['categories'] = $categories  ;

$_SESSION['brands']=$brands   ;

$_SESSION['prices']= $prices  ;

$_SESSION['queryList']= $queryList  ;

$_SESSION['show'] = $show ;

$_SESSION['filter'] = $filter ;
