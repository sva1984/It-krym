<?php

class Car
{
    const WEELS = 4;
    public $color = 'White';
    public $speed;
    public $fuel;
    public $brand;

    public function __construct($color = 'YUI', $speed = 60, $fuel = 10, $brand = 'Honda')
    {
        $this->color = $color;
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->brand = $brand;
        echo Car::WEELS . PHP_EOL;
        echo self::WEELS . PHP_EOL;
    }

    public function test()
    {
        echo "<br>Method WORKED" . PHP_EOL;
    }

    public function triptime($distanse)
    {
        $time = $distanse / $this->speed;
        return ($time);
    }

    public function __destruct()
    {
        echo "Class " . __CLASS__ . " was deleted" . PHP_EOL;
        echo 'Method ' . __METHOD__ . ' was called' . PHP_EOL;
    }
}

$Car1 = new Car('Yellow', 200, 60, 'Audi');
//$Car1->brand = 'Audi';
//$Car1->speed = 200;
//$Car1->fuel = 11.5;
//$Car1->test();
//unset($Car1);
//
$Car2 = new Car;
$Car2->brand = 'BMW';
$Car2->speed = 260;
$Car2->fuel = 15;
$Car2->color = 'Black';

//print_r($Car1);
//print_r($Car2);
echo $Car2->brand . PHP_EOL;
echo $Car1->triptime(5000) . PHP_EOL;
echo $Car2->triptime(5000) . PHP_EOL;