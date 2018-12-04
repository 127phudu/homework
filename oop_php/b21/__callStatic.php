<?php

class ConNguoi
{
    private $name = "viet";
    private $age = 20;

    public static function __callStatic($methodName, $arguments)
    {
        echo 'Bạn vừa gọi phương thức: ' . $methodName . ' và có các tham số: ' . implode('-', $arguments);
    }

    private static function getInfo()
    {
        echo "information";
    }
}

ConNguoi::getInfo();  //Bạn vừa gọi phương thức: getInfo và có các tham số:

ConNguoi::getInfo('name', 'age');  //Bạn vừa gọi phương thức: getInfo và có các tham số: name-age