<?php
$imena=['������','�����','������','������'];

$text='"������ ������": -  ������ �����, "�� ������ �� �����?". ������, ������ � �����  ���� ��������.';
$count=0;//�������� �������
for($i=0; $i<sizeof($imena) ;$i++) {
    $count += mb_substr_count($text, $imena[$i]); //�������� ���������� ���������� �������� ����
}

echo '���������� ��� � ��������� ����� - ',$count .PHP_EOL;
$my_name='������';
$chars = preg_split('//', $my_name, -1, PREG_SPLIT_NO_EMPTY);//��������� c���� �� ������ ����
for($i=0; $i<sizeof($chars); $i++){
    echo $chars[$i], ' - ';
    echo mb_substr_count($text, $chars[$i]) .PHP_EOL;//������� ���-�� ���� ����� � ������
    }

