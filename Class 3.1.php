<?php
Class Human {
    private $lastName;
    private $firstName;
    private $age
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    public function setAge($age){
        $this->Age = $age;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function getFirstName()
    {
        return $this->firstName ;
    }
    public function getAge(){
        return $this->age;
    }
    public function __toString()
    {
        return  '!' . $this->firstName .  " " . $this->getLastName() ." " .  $this->age;
    }
}
class Student extends Human {
    public function getFullName(){
        return $this->firstName . ' ' . $this->getLastName();
    }
    }
$objHuman = new Human();
$objHuman->setFirstName('Ivan');
$objHuman->setLastName('Ivanov');
$objHuman->setAge(25);
echo $objHuman . PHP_EOL;

