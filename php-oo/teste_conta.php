<?php

require_once 'Conta.php';
require_once 'ContaPessoaJuridica.php';
require_once 'ContaPessoaFisica.php';

$conta1 = new Conta\ContaPessoaFisica;
$conta1->setName('Carlos Ferreira');
$conta1->setNumber('132123142');
$conta1->setCpf('123.456.789-00');

echo $conta1->showData();

$especializati = new Conta\ContaPessoaJuridica;
$especializati->setName('EspecializaTi');
$especializati->setNumber('233004780');
$especializati->setCnpj('987.456.123-10');

var_dump($conta1, $especializati);