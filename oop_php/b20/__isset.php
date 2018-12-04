<?php

class ConNguoi
{
    private static $name;
    public $str = "viet";
    public function __isset($name)
    {
        echo '<br>Bạn vừa kiểm tra thuộc tính: ' . $name;
    }
}

$connguoi = new ConNguoi();

echo isset($connguoi->str);   //true

isset($connguoi->name);  //Bạn vừa kiểm tra thuộc tính: name

empty($connguoi->name);  //Bạn vừa kiểm tra thuộc tính: name

isset($connguoi->age);   //Bạn vừa kiểm tra thuộc tính: age