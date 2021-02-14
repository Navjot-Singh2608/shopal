<?php

// require MySql Connection
require("connect/DBController.php");

//require Product class
require("connect/Product.php");

//require Cart Class
require("connect/Cart.php");

 //DBController object
 $db = new DBController();

 // Product object
 $product = new Product($db);
$product_shuffle = $product->getData();

 //cart object
$Cart = new Cart($db);



?>