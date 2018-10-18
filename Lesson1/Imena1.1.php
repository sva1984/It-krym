<?php
$imena=['андрей','игорь','леонид','сергей'];

$text='"Привет андрей": -  сказал игорь, "ты леонид не видел?". Сергей, андрей и игорь  были друзьями.';
$count=0;//обнуляем счётчик
for($i=0; $i<sizeof($imena) ;$i++) {
    $count += mb_substr_count($text, $imena[$i]); //смчитаем количество повторений заданных слов
}

echo 'Количество имён с маленькой буквы - ',$count .PHP_EOL;
$my_name='Сергей';
$chars = preg_split('//', $my_name, -1, PREG_SPLIT_NO_EMPTY);//разбиваем cлово на массив букв
for($i=0; $i<sizeof($chars); $i++){
    echo $chars[$i], ' - ';
    echo mb_substr_count($text, $chars[$i]) .PHP_EOL;//считаем кол-во букв имени в тексте
    }

