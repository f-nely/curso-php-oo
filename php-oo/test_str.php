<?php

require_once 'src/Classes/Str.php';

$obj = new Str;
echo $obj->upper('hey you!');
echo '<br>';
echo Str::hello('Mahshad', 'Sara', 'Pit');
echo '<br>';
echo $obj;