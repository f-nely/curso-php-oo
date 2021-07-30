<?php

require_once 'src/Classes/Product.php';
require_once 'src/Classes/Cart.php';

use App\Classes\Product;
use App\Classes\Cart;

$p1 = new Product('DVD');
$p2 = new Product('Vazio');
$p3 = new Product('Roupa');

$cart = new Cart();
$cart->addCart($p1);
$cart->addCart($p2);
$cart->addCart($p3);

//var_dump($cart->all());
echo "<pre>";
print_r($cart->all());

/* Make each day your masterpiece */