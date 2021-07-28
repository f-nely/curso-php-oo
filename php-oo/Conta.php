<?php

namespace Conta;

abstract class Conta
{
    public string $number;
    public string $name;

    public function setNumber(string $number):void
    {
        $this->number = $number;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    abstract public function showData(): string;
}



