<?php

class ConNguoi
{
    private $name = 'viet';
    private $age = 20;

    public function __sleep()
    {
        //trả về thuộc tính name
        return array('name');
    }
}

echo serialize(new ConNguoi()); //O:8:"ConNguoi":1:{s:14:"ConNguoiname";s:4:"viet";}
