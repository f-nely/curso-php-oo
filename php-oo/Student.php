<?php

class Student
{
    private string $name;
    private float $balance;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->balance = 0.0;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function addBalance(float $balance): void
    {
        $this->balance = $balance;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function newOrder(float $value): bool
    {
        if ($this->balance >= $value) {
            $this->balance -= $value;
            return true;
        } else {
            return false;
        }
    }
}