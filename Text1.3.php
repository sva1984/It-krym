<?php
$text='Жизнь — это переход из одной формы в другую. Жизнь этого мира есть материал для новой формы. Толстой Л.Н.';

echo 'Длина текста: ', $text_len=strlen ( $text ).PHP_EOL;
if($text_len>50) {
    $text_trim47 = mb_strimwidth($text, 0, 47, "", 'windows-1251');//обрезаем строку до 47символов
    $text_trim47=trim($text_trim47);//удаляем пробелы вначале и в конце если они есть
    echo $text_trim47=$text_trim47.'...' .PHP_EOL;

}