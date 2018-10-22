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

class Student extends Human
{ //наследовали класс Student

    const TYPE_OCHN = 1;
    const TYPE_ZAOCHN = 2;

    private $course;
    private $grade;
    private $type = self::TYPE_OCHN;

    public function __construct($fio, $age, $course, $grade) // переопределили инициализацию класса
    {
        $this->fio = $fio;
        $this->age = $age;
        $this->course = $course;
        $this->grade = $grade;
    }

    public function getGrade()
    {//возаращаем фио т все оценки
        return $this->fio . ' ' . $this->grade;
    }

    public function __toString() //преобразовали класс в строку и вернули
    {
        return 'FIO ' . $this->fio . PHP_EOL . "Age " . $this->age . PHP_EOL . 'Course ' . $this->course . PHP_EOL . 'Grade ' . $this->grade;
    }
}

class Sotrudnik extends Human
{

    private $stavka_zp;
    private $grafik_zp;
    private $day_zp;

    public function __construct($fio, $age, $stavka_zp = 40000) // переопределили и инициализировали класс
    {
        $this->fio = $fio;
        $this->age = $age;
        $this->stavka_zp = $stavka_zp;
        $this->grafik_zp = array();
    }

    /**
     * @return mixed
     */
    public function grafikZP($day_zp, $stavka_zp)
    {
        this->$this->grafik_zp =
        return $this->age;
    }

    public function __toString() //преобразовали класс в строку и вернули
    {
        return 'FIO ' . $this->fio . PHP_EOL . "Age " . $this->age . PHP_EOL . 'Stavka ' . $this->stavka_zp . PHP_EOL;
    }

}

$objHuman = new Human('Ivanov I.I.', 20);
echo $objHuman . PHP_EOL;

$objStudent = new Student('Petrov P.P', 21, 3, '3,4,5');
echo $objStudent . PHP_EOL;
echo $objStudent->getGrade() . PHP_EOL;

$objSotrudnik = new Sotrudnik('Sidoroff F.F.', 30, 50000);
echo $objSotrudnik . PHP_EOL;