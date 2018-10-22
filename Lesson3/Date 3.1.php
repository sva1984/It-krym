<?php

$d = new DateTime('2018-09-17 14:05:59'); //выводим время в обычной читабельной форме
echo $d->format('l jS \of F Y h:i:s A'), PHP_EOL;

setlocale(LC_ALL, 'nl_RU');
date_default_timezone_set('Europe/Moscow');
echo 'Today is ' . date('l jS F Y h:i:s A') . PHP_EOL;
echo time().PHP_EOL;

