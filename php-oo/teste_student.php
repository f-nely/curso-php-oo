<?php

require_once 'Student.php';

$student1 = new Student('Carlos');
echo $student1->getName();
$student1->addBalance(20.00);
echo '<br>' . $student1->getBalance();
$value = 12.00;
$response = $student1->newOrder($value);
if (!$response) {
    echo "<br>Saldo insuficiente!";
}
echo '<br>' . $student1->getBalance();