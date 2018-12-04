<?php

trait Name
{
    private $name = 'viet';

    private function getName()
    {
        return $this->name;
    }
}


class ConNguoi
{
    use Name {
        getName as public doName;
    }
}

$connguoi = new ConNguoi();

echo $connguoi->doName();