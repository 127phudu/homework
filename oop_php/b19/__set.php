<?php

class ConNguoi
{
    private $name;

    public function __set($key, $value)
    {
        if (property_exists($this, $key)) {
            $this->$key = $value;
        } else {
            die('Không tồn tại thuộc tính');
        }
    }

    public function getName()
    {
        echo $this->name;
    }
}

$connguoi = new ConNguoi();

$connguoi->name = "viet";

$connguoi->getName(); //viet


$connguoi->age = 20;
//Không tồn tại thuộc tính