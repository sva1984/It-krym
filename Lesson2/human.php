<?php

class Human
{

    private $fio;
    private $age;

    public function __construct($fio, $age) //инициализировали класс
    {
        $this->fio = $fio;
        $this->age = $age;
    }

    public function __toString() //преобразовали класс в строку и вернули
    {
        return 'FIO ' . $this->fio . PHP_EOL . "Age " . $this->age;
    }
}

require 'student.php';
include 'sotrudnik.php';


$objHuman = new Human('Ivanov I.I.', 20);
echo $objHuman . PHP_EOL;

$objStudent = new Student('Petrov P.P', 21, 3, '3,4,5');
echo $objStudent . PHP_EOL;
echo $objStudent->getGrade() . PHP_EOL;

$objSotrudnik = new Sotrudnik('Sidoroff F.F.', 30, 50000);
echo $objSotrudnik . PHP_EOL;