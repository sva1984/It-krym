<?php

class Student
{

//public $firstName;
//private $lastName;

//    public function __construct()
//    {
//        echo 123 . PHP_EOL;
//    }

    public function setLasttName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function __toString()
    {
        return '!' . $this->firstName . ' ' . $this->getLastName();
    }
}

class GoodStudent extends Student
{
    public $stipendia = 0;

    public function getFullName()
    {
        return $this->firstName . ' ' . $this->getLastName();
    }
}

$objStudent = new GoodStudent();
$objStudent->setFirstName('Vasya');
$objStudent->setLasttName('Petrov');

//var_dump($objStudent);

echo $objStudent->getFullName() . PHP_EOL;
//echo $objStudent . PHP_EOL;
