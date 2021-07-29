<?php

use Especializati\School;

require_once 'School.php';

$school = new School;
echo  $school::PID . '<br>';
echo School::showBalance();
echo '<br>';
School::addBalance(100);
echo School::showBalance();