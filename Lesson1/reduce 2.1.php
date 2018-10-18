<?php
function mult($carry, $item)//функция умножения
{
    $carry *= $item;
    return $carry;
}

$a=array(1,2,3,4,5,6,7,8,9,);

echo array_reduce($a,"mult", 1) .PHP_EOL;

/**
 * Created by PhpStorm.
 * User: sva
 * Date: 30.09.2018
 * Time: 10:58
 */