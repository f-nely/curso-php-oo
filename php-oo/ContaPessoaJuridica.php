<?php

namespace Conta;

class ContaPessoaJuridica extends Conta
{
    public string $cnpj;

    public function setCnpj(string $cnpj): void 
    {
        $this->cnpj = $cnpj;
    }

    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    public function showData(): string
    {
        return "Nome: {$this->name}, Número: {$this->number}, CNPJ: {$this->cnpj} <br>";
    }
}