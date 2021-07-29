<?php

//Задача 14.1
//Сделайте класс City (город), в котором будут следующие свойства - name (название),
//foundation (дата основания), population (население).
//Создайте объект этого класса.

class City {

    private string $name;
    private DateTime $foundation;
    private int $population;

    public function __construct(string $name, DateTime $foundation, int $population)
    {

        $this->name = $name;
        $this->foundation = $foundation;
        $this->population = $population;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $format
     * @return string
     */
    public function getFoundation(string $format = 'Y-m-d'): string
    {
        return $this->foundation->format($format);
    }

    /**
     * @return int
     */
    public function getPopulation(): int
    {
        return $this->population;
    }

}

$arr = new City('dsfgdf', new DateTime('2008-06-30'), 23);
$props = ['name', 'foundation', 'population'];

foreach ($props as $value) {
    $getprop = 'get' . ucfirst($value);
    echo $arr->$getprop();
    echo '<br />';
}

echo '<br/>';

class User {

    public string $surname; // фамилия
    public string $name; // имя
    public string $patronymic; // отчество

    public function __construct(string $surname, string $name, string $patronymic)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->patronymic = $patronymic;
    }

}

$user = new User('иванов', 'иван', 'иванович ');
$props = ['surname', 'name', 'patronymic'];

foreach ($props as $prop) {

    echo $user->{$prop} . '<br/>';
}