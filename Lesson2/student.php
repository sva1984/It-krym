<?php

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
