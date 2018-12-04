<?php

class ConNguoi
{
    private $name;
    public $str = "viet";
    public function __unset($name)
    {
        echo '<br>Bạn vừa hủy thuộc tính: ' . $name;
    }
}

$connguoi = new ConNguoi();

echo '<pre>';
print_r($connguoi);
echo '</pre>';

unset($connguoi->str);

echo '<pre>';
print_r($connguoi);
echo '</pre>';

unset($connguoi->name);  //Bạn vừa hủy thuộc tính: name

unset($connguoi->age);  //Bạn vừa hủy thuộc tính: age