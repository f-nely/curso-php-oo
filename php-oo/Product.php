<?php

class Product
{
    public $name;
    public $description;
    public $price;
    public $brand;
    public $weight;
}

$tv = new Product;
$tv->name = 'TV';
$tv->description = 'Smart TV';
$tv->price = 4.500;
$tv->brand = 'Samsung';
$tv->weight = 15;

var_dump($tv);

// Even if you're on the right track, you'll get run over if you just sit there.