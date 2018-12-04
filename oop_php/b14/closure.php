<?php

$scope = 'viet';

$name = function () use ($scope) {
    return $scope;
};

echo '<br>'.$name();

//------------------------------------------------------------------------

$number = 1;

$getNextNumber = function () use (&$number) {
    $number++;
    return $number;
};

$getPreNumber = function () use (&$number) {
    $number--;
    return $number;
};

echo '<br>'.$getNextNumber();

echo '<br>'.$number;

echo '<br>'.$getPreNumber();