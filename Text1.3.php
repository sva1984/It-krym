<?php
$text='����� � ��� ������� �� ����� ����� � ������. ����� ����� ���� ���� �������� ��� ����� �����. ������� �.�.';

echo '����� ������: ', $text_len=strlen ( $text ).PHP_EOL;
if($text_len>50) {
    $text_trim47 = mb_strimwidth($text, 0, 47, "", 'windows-1251');//�������� ������ �� 47��������
    $text_trim47=trim($text_trim47);//������� ������� ������� � � ����� ���� ��� ����
    echo $text_trim47=$text_trim47.'...' .PHP_EOL;

}