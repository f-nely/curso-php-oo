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

$geladeira = new Product;
$geladeira->name = 'Geladeira';
$geladeira->description = 'Degelo automático';
$geladeira->price = 3.400;
$geladeira->brand = 'Consul';
$geladeira->weight = 334;


$microondas = new Product;
$microondas->name = 'Microondas';
$microondas->description = '';
$microondas->price = 400.00;
$microondas->brand = 'Electrolux';
$microondas->weight = 20;

var_dump($tv, $geladeira, $microondas);

// Even if you're on the right track, you'll get run over if you just sit there.