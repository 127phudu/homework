<?php

class ConNguoi
{
    private $name = 'viet';
    private $age = 20;

    public function __toString()
    {
        return 'Class ConNguoi';
    }
}

echo new ConNguoi();  //Class ConNguoi