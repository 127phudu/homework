<?php

trait Name
{
    private static $name = 'None';

    public function setName($name)
    {
        self::$name = $name;
    }

    public function getName()
    {
        return self::$name;
    }
}

class ConNguoi
{
    use Name;
}

class NguoiLon
{
    use Name;
}

$connguoi = new ConNguoi();

$connguoi->setName('viet');

echo $connguoi->getName();  //viet

$trecon = new ConNguoi();

echo $trecon->getName();   //viet

$nguoilon = new NguoiLon();

echo $nguoilon->getName();  //None