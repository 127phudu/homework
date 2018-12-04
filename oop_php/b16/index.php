<?php

class ConNguoi
{
    private $name;

    public function setName($name = 'Con Nguoi')
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }
}

$connguoi = new ConNguoi();

echo $connguoi->setName('viet')->getName();  //viet
