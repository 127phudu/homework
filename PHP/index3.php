<?php

$int = 3;
var_dump($int);
echo '<br>';

$float = 3.14;
var_dump($float);
echo '<br>';

$string = 'hello';
var_dump($string);
echo '<br>';

$boolean_true = true;
var_dump($boolean_true);
echo '<br>';

$boolean_false = false;
var_dump($boolean_false);
echo '<br>';

$null = null;
var_dump($null);
echo '<br>';

$ar = array(1,2,3,4,5,6,7,8,9);
var_dump($ar);
echo '<br>';

echo '<pre>';
print_r($ar);
echo '</pre>';

/**
 * hằng số
 */

define('APP_NAME','Ứng dụng PHP');
echo APP_NAME;
echo '<br>';
?>