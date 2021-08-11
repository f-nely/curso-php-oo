<?php

class Str
{
    public $first_name = 'Mahshad';
    public $last_name = 'Kalatari';

    public function __call($name, $arguments)
    {
        if ($name === 'upper')
            return strtoupper($arguments[0]);
    }

    public static function __callStatic($name, $arguments)
    {
        return $name . ' => ' . implode(', ', $arguments);
    }

    public function __toString()
    {
        return $this->first_name . ' - ' . $this->last_name;
    }
}