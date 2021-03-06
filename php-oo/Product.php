<?php

class Product
{
    public $name;
    public $description;
    public $price;
    public $brand;
    public $weight;

    public function __construct(string $brand)
    {
        $this->brand = $brand;
    }

    public function show(): string
    {
        return "{$this->name}, {$this->description}, {$this->price}, {$this->brand}, {$this->weight} <br>";
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return strtolower($this->name);
    }

    public function __destruct()
    {
        print 'Destroying ' . __CLASS__ . '<br>';
    }
}

$tv = new Product('Samsung');
//$tv->name = 'TV';
$tv->setName('TV');
$tv->description = 'Smart TV';
$tv->price = 4.500;
//$tv->brand = 'Samsung';
$tv->weight = 15;
echo $tv->getName();
echo $tv->show();

$geladeira = new Product('Consul');
//$geladeira->name = 'Geladeira';
$geladeira->setName('Geladeira');
$geladeira->description = 'Degelo automático';
$geladeira->price = 3.400;
//$geladeira->brand = 'Consul';
$geladeira->weight = 334;
echo $geladeira->show();

$microondas = new Product('Electrolux');
$microondas->name = 'Microondas';
$microondas->description = '';
$microondas->price = 400.00;
//$microondas->brand = 'Electrolux';
$microondas->weight = 20;
echo $microondas->show();

var_dump($tv, $geladeira, $microondas);

// Even if you're on the right track, you'll get run over if you just sit there.