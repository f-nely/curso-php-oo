<?php

namespace Conta;

class ContaPessoaFisica extends Conta
{
    public string $cpf;

    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function showData(): string
    {
        return "Nome: {$this->name}, Número: {$this->number}, CPF: {$this->cpf} <br>";
    }
}