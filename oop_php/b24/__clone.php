<?php

class ConNguoi
{
    public $name = "viet";
    public $age = 21;

    public function __clone()
    {
        echo 'function clone<br>';
    }
}

$connguoi = new ConNguoi();

$connguoi2 = clone $connguoi;  //function clone

echo $connguoi2->name;  // viet