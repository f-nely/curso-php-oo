<?php

namespace Especializati;

class School
{
    const PID = 'a0030';
    private static $balance = 0.0;

    public static function showBalance(): float
    {
        return self::$balance;
    }

    public static function addBalance(float $balance): void
    {
        self::$balance += $balance;
    }
}