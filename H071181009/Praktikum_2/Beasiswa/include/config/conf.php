<?php
function add($a = 1, $b = 2)
{
    return $a + $b;
}

function addA($c)
{
    static $a = 0;
    $a += 1;
    echo $a;
}