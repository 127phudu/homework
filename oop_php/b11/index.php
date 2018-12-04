<?php
include "class1.php";
include "class2.php";

$hello = new class1\test();
$hi = new class2\test();
$yo = new class22\test();
$hello->hello();
$hi->hi();
$yo->yo();