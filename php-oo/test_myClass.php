<?php

require_once 'src/Classes/MyClass.php';

$obj = new MyClass;
$obj->name = 'Carlos';
$obj->cpf = '123.456.789-00';
$obj->age = 47;
echo $obj->name;
echo '<br>' . $obj->cpf ;
echo '<br>' . $obj->age ;