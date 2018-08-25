<?php

$x = 1;
$y = 2;
$z = 3;

function sum(){
    echo 'x la: ' . $GLOBALS['x'];
    echo 'y la: ' . $GLOBALS['y'];

    return $GLOBALS['x']+$GLOBALS['y'];

}

echo '<pre>';
print_r($GLOBALS);
echo '</pre>';
