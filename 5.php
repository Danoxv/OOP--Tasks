<?php
/*
 * Обращение к методам через $this
 * http://code.mu/ru/php/book/oop/methods-and-this/
 */

// Задача 5.1
// Не подсматривая в мой код создайте такой же класс User с такими же методами.
class User
{
    public string $name;
    public int $age;

    public function setAge(int $age)
    {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }

    public function addAge(int $age)
    {
        $newAge = $this->age + $age;

        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }

    // Задача 5.3
    // Добавьте также метод subAge, который будет выполнять уменьшение текущего возраста на переданное количество лет.
    public function subAge(int $age)
    {
        $newAge = $this->age - $age;

        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }

    private function isAgeCorrect(int $age): bool
    {
        return $age > 18 && $age < 60;
    }
}

// Задача 5.2
// Создайте объект этого класса User, проверьте работу методов setAge и addAge.
$user = new User();

$user->setAge(20);
var_dump($user->age);   // must be 20

$user->setAge(99);
var_dump($user->age);   // must be 20

$user->addAge(35);
var_dump($user->age);   // must be 55

$user->addAge(1000);
var_dump($user->age);   // must be 55