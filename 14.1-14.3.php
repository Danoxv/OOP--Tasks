<?php

//Задача 14.1
//Сделайте класс City (город), в котором будут следующие свойства - name (название),
//foundation (дата основания), population (население).
//Создайте объект этого класса.

class City {

    public string $name;
    public DateTime $foundation;
    public int $population;

    public function __construct(string $name, DateTime $foundation, int $population)
    {

        $this->name = $name;
        $this->foundation = $foundation;
        $this->population = $population;
    }

}

$arr = new City('dsfgdf', '1996-08-03', 23);
$props = ['name', 'foundation', 'population'];

foreach ($props as $value) {
    echo $arr->$value . '<br/>';
}

class User {

    public $surname; // фамилия
    public $name; // имя
    public $patronymic; // отчество

    public function __construct($surname, $name, $patronymic)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->patronymic = $patronymic;
    }

}

$user = new User('иванов', 'иван', 'иванович ');
$props = ['surname', 'name', 'patronymic'];
echo $user->{$props[1]};
echo $user->{$props[2]};
?>