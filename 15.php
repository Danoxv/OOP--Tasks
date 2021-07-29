<?php

class User {

    private string  $name;
    private int  $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge():int
    {
        return $this->age;
    }

}
//Задача 15.1
//Пусть массив $methods будет ассоциативным с ключами method1 и method2:
//Выведите имя и возраст пользователя с помощью этого массива.

$user = new User('Коля', 21);
$methods = ['method1' => 'getName', 'method2' => 'getAge'];

foreach ($methods as $method) {
    echo $user->$method() . ' ';
}