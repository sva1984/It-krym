<?php
$text = '����� � ��� ������� �� ����� ����� � ������. ����� ����� ���� ���� �������� ��� ����� �����. ������� �.�.';

echo '����� ������: ', $text_len = strlen($text) . PHP_EOL;
if ($text_len > 50) {
    for ($i = 46; $i < $text_len; $i++) {
        if ($text{$i} == ' ') { //���� ������ � ����� �����
            $text_trim = mb_strimwidth($text, 0, $i + 3, "...", 'windows-1251');//�������� ������ � ��������� '...'
            break;//������� �� �����
        }
    }
}
echo $text_trim . PHP_EOL;