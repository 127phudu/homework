<?php

class ConNguoi
{
    private $name = "viet";

    public function __get($key)
    {
        if (property_exists($this, $key)) {
            return $this->$key;
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

echo $connguoi->name; //viet

$connguoi->age;  //Không tồn tại thuộc tính