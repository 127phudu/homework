<?php

class ConNguoi
{
    private $name = "viet";
    private $age = 20;

    public function __call($methodName, $arguments)
    {
        echo 'Bạn vừa gọi phương thức: ' . $methodName . ' và có các tham số: ' . implode('-', $arguments);
    }

    private function getInfo()
    {
        echo $this->name . ' + ' . $this->age;
    }
}

$connguoi = new ConNguoi();

$connguoi->getInfo();  //Bạn vừa gọi phương thức: getInfo và có các tham số:

$connguoi->getInfo('name', 'age');  //Bạn vừa gọi phương thức: getInfo và có các tham số: Bạn vừa gọi phương thức: getInfo và có các tham số: name-age