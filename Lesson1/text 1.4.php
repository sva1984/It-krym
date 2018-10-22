<?php
$text = 'Жизнь — это переход из одной формы в другую. Жизнь этого мира есть материал для новой формы. Толстой Л.Н.';

echo 'Длина текста: ', $text_len = strlen($text) . PHP_EOL;
if ($text_len > 50) {
    for ($i = 46; $i < $text_len; $i++) {
        if ($text{$i} == ' ') { //ищем пробел в конце слова
            $text_trim = mb_strimwidth($text, 0, $i + 3, "...", 'windows-1251');//обрезаем строку и добавляем '...'
            break;//выходим из цикла
        }
    }
}
echo $text_trim . PHP_EOL;