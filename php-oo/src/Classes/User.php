<?php

class User
{
    public string $name;
    public $address;

    public function setAddress(string $street, string $distric): void
    {
        $address = new Address();
        $address->street = $street;
        $address->district = $distric;

        $this->address = $address;
    }

    public function getAddress(): string
    {
        return "Endereço: rua {$this->address->street}, bairro {$this->address->district}";
    }
}