<?php

Class Student
{
    protected $firstName;
    private $lastName;

    public function __construct()
    {
        echo '123' . PHP_EOL;
    }


    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getFirstName()
    {
        $this->firstName;
    }

    public function getLastName()
    {
        $this->lastName;
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

$objStudent = new Student();
$objStudent->setFirstName('Vasya');
$objStudent->setLastName('Petrov');

var_dump($objStudent);

echo $objStudent->getFullName() . PHP_EOL;