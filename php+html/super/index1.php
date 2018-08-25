<?php
$x = 4;

/**
 * @param $a
 * @param $b
 * @return mixed
 */
function sum($a, $b){
    $x = 5;
    echo 'bien x: ' . $x;
    return $a + $b;
}

sum(1, 2, $x);

echo '<br> bien x o ngoai ham ' . $x;