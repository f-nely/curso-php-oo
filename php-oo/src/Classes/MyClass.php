<?php

class MyClass
{
    private string $name;
    private string $cpf;
    private int $age;

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}