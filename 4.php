<?php

/*
 * Обращение к свойствам класса через $this
 * Запись свойств
 * http://code.mu/ru/php/book/oop/properties-and-this/
 */

// Задача 4.1
// Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), age (возраст), salary (зарплата).
class Employee {

    public string $name;
    public int $age;
    public int $salary;

    // Задача 4.2
    // Сделайте в классе Employee метод getName, который будет возвращать имя работника.
    public function getName(): int
    {
        return $this->name;
    }

    // Задача 4.3
    // Сделайте в классе Employee метод getAge, который будет возвращать возраст работника.
    public function getAge(): int
    {
        return $this->age;
    }

    // Задача 4.4
    // Сделайте в классе Employee метод getSalary, который будет возвращать зарплату работника.
    public function getSalary(): int
    {
        return $this->salary;
    }

    // Задача 4.5
    // Сделайте в классе Employee метод checkAge, который будет проверять то, что работнику больше 18 лет
    // и возвращать true, если это так, и false, если это не так.
    public function checkAge(): bool
    {
        return $this->age > 18;
    }

    // Задача 4.11
    // Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), salary (зарплата).
    // Сделайте метод doubleSalary, который текущую зарплату будет увеличивать в 2 раза.
    public function doubleSalary()
    {
        $this->salary *= 2;
    }

}

// Задача 4.6
// Создайте два объекта класса Employee, запишите в их свойства какие-либо значения.
// С помощью метода getSalary найдите сумму зарплат созданных работников.
$emp1 = new Employee();
$emp1->name = 'Иван';
$emp1->age = 25;
$emp1->salary = 1000;

$emp2 = new Employee();
$emp2->name = 'Вася';
$emp2->age = 26;
$emp2->salary = 2000;

echo sprintf('Сумма зарплат: %d', $emp1->getSalary() + $emp2->getSalary());

// Задача 4.7
// Сделайте класс User, в котором будут следующие свойства - name (имя), age (возраст).
class User 
{
    public string $name;
    public int $age;

    // Задача 4.8
    // Сделайте метод setAge, который параметром будет принимать новый возраст пользователя.
    public function setAge(int $age)
    {
        // Задача 4.10
        // Модифицируйте метод setAge так, чтобы он вначале проверял, что переданный возраст больше или равен 18.
        // Если это так - пусть метод меняет возраст пользователя, а если не так - то ничего не делает.
        if ($age > 18) {
           return  $this->age = $age;
        }
    }
}

// Задача 4.9
// Создайте объект класса User с именем 'Коля' и возрастом 25. С помощью метода setAge поменяйте возраст на 30.
// Выведите новое значение возраста на экран.
$user = new User();
$user->name = 'Коля';
$user->age = 25;

$user->setAge(30);

echo $user->age;

// Задача 4.12
// Сделайте класс Rectangle (прямоугольник), в котором в свойствах будут записаны ширина и высота.
class Rectangle 
{
    public int $width;
    public int $height;

    // Задача 4.13
    // В классе Rectangle сделайте метод getSquare, который будет возвращать площадь этого прямоугольника.
    public function getSquare(): int
    {
        return $this->width * $this->height;
    }

    // Задача 4.14
    // В классе Rectangle сделайте метод getPerimeter, который будет возвращать периметр этого прямоугольника.
    public function getPerimeter():int
    {
        return 2 * ($this->width + $this->height);
    }
}
