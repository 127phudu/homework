<?php

class ConNguoi
{
    private static $name = 'ConNguoi';

    public static function getName()
    {
        echo self::$name;
        echo '<br>';
        echo static::$name;
    }
}

class NguoiLon extends ConNguoi
{
    private static $name = 'NguoiLon';
}

NguoiLon::getName();