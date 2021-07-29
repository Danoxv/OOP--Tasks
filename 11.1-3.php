<?php

//Задача 11.1
//Сделайте класс City (город), в котором будут следующие свойства: name (название города), population (количество населения).

class City {

    public string $name;
    public int $population;

    public function __construct(string $name, int $population)
    {
        $this->name = $name;
        $this->population = $population;
    }

}

//Задача 11.2
//Создайте 5 объектов класса City, заполните их данными и запишите в массив.

$arr = [new City('Belgrade', 1), new City('Kharkov', 2), new City('Vienna', 3), new City('Donetsk', 4), new City('Prague', 5)];

//Задача 11.3
//Переберите созданный вами массив с городами циклом и выведите города и их население на экран.

foreach ($arr as $value) {
    echo $value->name . $value->population . '<br/>';
}

?>