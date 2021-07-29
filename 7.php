<?php

/*
 * Конструктор объекта
 * http://code.mu/ru/php/book/oop/constructor/
 */

// Задача 7.1
// Сделайте класс Employee, в котором будут следующие публичные свойства - name (имя), age (возраст), salary (зарплата).
// Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта.
class Employee {

    private string $name;
    private int $age;
    private int $salary;

    public function __construct(string $name, int $age, int $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }

}

// Задача 7.2
// Создайте объект класса Employee с именем 'Вася', возрастом 25, зарплатой 1000.
$emp1 = new Employee('Вася', 25, 1000);

// Задача 7.3
// Создайте объект класса Employee с именем 'Петя', возрастом 30, зарплатой 2000.
$emp2 = new Employee('Петя', 30, 2000);

// Задача 7.4
// Выведите на экран сумму зарплат Васи и Пети.
echo $emp1->getSalary() + $emp2->getSalary();
