<?php
date_default_timezone_set('Europe/Moscow');//выставляем часовой пояс

$d = new DateTime('2018-09-17 14:05:59'); //выводим время в обычной читабельной форме
echo $d->format('l jS \of F Y h:i:s A'), PHP_EOL;


$bith_day = date('1984-08-24'); //определяем дату рождения


echo 'Bith_day ' . $bith_day . PHP_EOL;
$delta_time = time() - strtotime($bith_day);//Высчитываем кол-во секунд между сегодняшним днем до 1970г и днем рожденьем и 1970г
echo 'Years: ' . floor($delta_time / (86400 * 365)) . PHP_EOL; // Высчитываем сколько в дне секунд 1 day = 86400sec =  day 24h * 60min *60sec
echo 'Month: ' . floor(($delta_time % (86400 * 365)) / (86400)) . PHP_EOL;
echo 'Days: ' . floor((($delta_time % (86400 * 365)) % (86400 * 30.41667)) / 86400) . PHP_EOL;
echo 'Hours: ' . floor(($delta_time % 86400) / 3600) . PHP_EOL;
echo 'Mins: ' . floor(($delta_time % (3600)) / 60) . PHP_EOL;
echo 'Seconds: ' . $delta_time % 60 . PHP_EOL;
