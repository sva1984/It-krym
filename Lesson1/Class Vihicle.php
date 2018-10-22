<?php

class Vehicle
{
    public $color;
    public $speed;
    public $brand;

    public function tripTime($distanse)
    {
        $time = $distanse / $this->speed;
        return ($time);
    }

}

class Bicycle extends Vehicle
{
    public $type;
    const CALORIES_PER_HOUR = 500;

    public function caloriesBurned($distanse)
    {
        $time = $this->tripTime($distanse);
        $calories = $time * self::CALORIES_PER_HOUR;
        return ($calories);
    }

    public function tripTime($distanse)
    {
        return ((parent::tripTime($distanse)) * 1.2);
    }
}

class Car extends Vehicle
{
    public $fuel;

    public function fuelConsumption($distanse)
    {
        $result = $this->speed * $distanse / 100;
        return ($result);
    }
}

$car1 = new Car;
$car1->speed = 110;
$car1->fuel = 12;

$car2 = new Car;
$car2->speed = 130;
$car2->fuel = 14;

$bicycle = new Bicycle;
$bicycle->speed = 20;

$distanse = 100;
echo 'Car1 time: ' . $car1->tripTime($distanse) . PHP_EOL;
echo 'Car2 time: ' . $car2->tripTime($distanse) . PHP_EOL;
echo 'Bicycle time: ' . $bicycle->tripTime($distanse) . PHP_EOL;


echo 'Car 1 Fuel Consumption ' . $car1->fuelConsumption($distanse) . PHP_EOL;
echo 'Car 2 Fuel Consumption ' . $car2->fuelConsumption($distanse) . PHP_EOL;
echo 'BiCycle calories burned per/hour ' . $bicycle->caloriesBurned($distanse) . PHP_EOL;
