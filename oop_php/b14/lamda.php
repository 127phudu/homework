<?php

function getRole($role)
{
    return $role();
}

echo getRole(function () {
    return "hello";
});

$content = function ($message) {
    return 'Content: ' . $message;
};
$txt = 'Học Lập trình';
echo '<br>'.$content($txt);