<?php

require_once 'src/Classes/User.php';
require_once 'src/Classes/Address.php';

$user = new User;
$user->name = 'Carlos';
$user->setAddress('Avenida Lucio Costa', 'Barra da Tijuca');
echo '<pre>' . $user->getAddress();