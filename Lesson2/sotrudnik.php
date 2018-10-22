<?php

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
        // this->$this->grafik_zp;
        return $this->age;
    }

    public function __toString() //преобразовали класс в строку и вернули
    {
        return 'FIO ' . $this->fio . PHP_EOL . "Age " . $this->age . PHP_EOL . 'Stavka ' . $this->stavka_zp . PHP_EOL;
    }

}