<?php
Class Human {

    public function setLasttName($lastName)
    {
        $this->lastName = $lastName;
    }
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    public function setAge($Age){
        $this->Age = $Age;
    }
    public function getLasttName($lastName)
    {
        return $this->lastName;
    }
    public function getFirstName($firstName)
    {
        return $this->firstName ;
    }
    public function getAge($firstName){
        return $this->Age;
    }
    public function __toString()
    {
        return  '!' . $this->firstName .  " " . $this->lastName ." " .  $this->Age;
    }
}
class Student{
    public $firstname;
    public $lastname;
    public $kurs;
    public $forma_obucheniya;
    public $ocenki;
    public function __toString()
    {
        return  '!' . $this->firstname .  " " . $this->lastname ." " .  $this->kurs. ' ' . $this->forma_obucheniya . ' ' . $this->ocenki;
    }
}
$objHuman = new Human();
$objHuman->setFirstName('Ivan');
$objHuman->setLasttName('Ivanov');
$objHuman->setAge(25);

echo  $objHuman .PHP_EOL;
$objStudent1= new Student();
$objStudent1->firstname='Petr';
$objStudent1->lastname='Petrov';
$objStudent1->kurs='3';
$objStudent1->forma_obucheniya='Stacionarnoe obu4enie';
$objStudent1->ocenki='4, 5, 4, 4';

echo $objStudent1 .PHP_EOL;