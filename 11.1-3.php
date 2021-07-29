<?php

//Задача 11.1
//Сделайте класс City (город), в котором будут следующие свойства: name (название города), population (количество населения).

class City {

    public string $name;
    public int $population;

    public function __construct($name, $population)
    {
        $this->name = $name;
        $this->population = $population;
    }

}

$arr = [new City('belgorod', 1), new City('kharkov', 2)];
foreach ($arr as $value) {
    echo $value->name . $value->population;
}

?>