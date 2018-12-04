<?php

class ConNguoi
{
    private $name = "viet";
    private $age = 20;

    public static function __set_state(array $arr)
    {
        foreach ($arr as $key => $value) {
            echo $key . '->' . $value . '<br>';
        }
    }
}

$connguoi = new ConNguoi();
eval(var_export($connguoi, true).';');
/*
name->viet
age->20
 */