<?php

require_once 'src/Classes/ExampleMain.php';
require_once 'src/Classes/Example.php';

$obj = new Example;
//métodos publicos existente da classe 
//$method = get_class_methods($obj);
//$method = get_class_methods('Example');
//var_dump($method);

// atributos publicos existente da classe 
//$vars = get_class_vars('Example');
//var_dump($vars);

//$vars = get_object_vars($obj);
//var_dump($vars);

//retorna o nome da classe
//var_dump(get_class($obj));

//var_dump(get_parent_class($obj));
//var_dump(is_subclass_of($obj, 'ExampleMain'));

//verifica existência de métodos
//var_dump(method_exists($obj, 'method1'));

//verifica existência de propriedades
var_dump(property_exists($obj, 'name'));