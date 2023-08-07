<?php
require('./database/DBController.php');
require('./database/Product.php');
require('./database/Cart.php');

//database connection object
$dbconn=new DBController();


// a product object to control products data in pages
$Product=new Product($dbconn);
$product_shufle = $Product->getData();


// new cart object to add and delete user's carts
$Cart = new Cart($dbconn);
// $Cart.g
// print_r($product->getData());
?>