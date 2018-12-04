<?php

trait Name
{
    public static function getName()
    {
        return 'viet';
    }
}

class ConNguoi
{
    use Name;
}

$connguoi = new ConNguoi();

echo $connguoi->getName();  //viet


echo ConNguoi::getName();  //viet
