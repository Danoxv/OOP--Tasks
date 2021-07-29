<?php

/*
 * Задача 22.2
 * Сделайте класс User, в котором будут следующие свойства только для чтения: name (имя), surname (фамилия),
 * Начальные значения этих свойств должны устанавливаться в конструкторе. Сделайте также геттеры этих свойств.
 */

class Userr {

    protected string $name;
    protected int $age;

    /*
     * Задача 22.3
     * Сделайте так, чтобы третьим параметром в конструктор передавалась дата рождения работника в формате год-месяц-день
     * Запишите ее в свойство birthday. Сделайте геттер для этого свойства.
     */

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

}

class Student extends Userr {

    private int $course;

    public function __construct(string $name, int $age, int $course)
    {

        $this->name = $name;
        $this->age = $age;

        $this->course = $course;
    }

    public function getCourse(): int
    {
        return $this->course;
    }

}

$student = new Student('Вадик', 16, 1);

echo $student->getName();
echo $student->getAge();
echo $student->getCourse();

class User {

    private string $name;
    private string $surname;
    private  $birthday;
    private int $age;

    public function __construct(string $name, string $surname, $birthday)
    {
        $this->name = $name;
        $this->surname = $surname;

        $this->birthday = $birthday;
        $this->age = $this->calculateAge($birthday);
    }

    private function calculateAge($dt): int
    {
        $origin = new DateTime($dt);
        $target = new DateTime(date("Ymd"));
        $interval = $origin->diff($target);

        return $interval->format("%y");
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getDateBirt(): string
    {
        return $this->birthday;
    }

    public function getAge(): int
    {
        return $this->age;
    }

}

class Employee extends User {

    private $salary;

    public function __consruct(string $name, string $surname, $birthday, int $salary)
    {
        parent::__construct($name, $surname, $birthday);
        $this->salary = $salary;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }

}

$user = new User("rgj", "fgdfbgfdhbg", '1999-01-09');
var_dump( $user->getAge());
?>