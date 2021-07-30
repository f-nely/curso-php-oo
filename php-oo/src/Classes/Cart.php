<?php

namespace App\Classes;

class Cart
{
    private $itens = [];

    public function addCart(Product $product) :void
    {
        array_push($this->itens, $product);
    }

    public function all(): array
    {
        return $this->itens;
    }
}