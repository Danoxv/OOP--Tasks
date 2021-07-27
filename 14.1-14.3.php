<?php

class City {

    public $name;
    public $foundation;
    public $population;

    public function __construct($name, $foundation, $population)
    {

        $this->name = $name;
        $this->foundation = $foundation;
        $this->population = $population;
    }

}

$arr = new City('dsfgdf', '12', '23');
$props = ['name', 'foundation', 'population'];
foreach ($props as $value) {
    echo $arr->$value;
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