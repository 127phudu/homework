<?php

class ConNguoi
{
    public $name = "viet";
    public $age = 21;

    public function __debugInfo()
    {
        return [
            'name' => $this->name,
        ];
    }
}

$connguoi = new ConNguoi();
var_dump($connguoi);  //object(ConNguoi)#1 (1) { ["name"]=> string(4) "viet" }
