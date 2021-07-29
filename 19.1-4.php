<?php

//Задача 19.1
//Не подсматривая в мой код реализуйте такие же классы User, Employee.

class User {

    private string $name;
    private int $age;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

}

class Employee extends User {

    private int $salary;

    public function getSalary(): int
    {
        return $this->salary;
    }

    public function setSalary(int $salary): void
    {
        $this->salary = $salary;
    }

}

//Задача 19.2 
//Не подсматривая в мой код реализуйте такой же класс Student, наследующий от класса User.

class Student extends User {

    private int $course;

    public function getCourse(): int
    {
        return $this->course;
    }

    public function setCourse(int $course): void
    {
        $this->course = $course;
    }

}


//Задача 19.3 Сделайте класс Programmer, который будет наследовать от класса Employee. 
//Пусть новый класс имеет свойство langs, 
//в котором будет хранится массив языков, 
//которыми владеет программист. Сделайте также геттер и сеттер для этого свойства.
        
class Programmer extends Employee
{
    private array $langs = [];

    /**
     * @return array
     */
    public function getLangs(): array
    {
        return $this->langs;
    }

    /**
     * @param array $langs
     */
    public function setLangs(array $langs): void
    {
        $this->langs = $langs;
    }
}


//Задача 19.4   Сделайте класс Driver (водитель), 
//который будет наследовать от класса Employee. 
//Пусть новый класс добавляет следующие свойства: водительский стаж, 
//категория вождения (A, B, C, D), а также геттеры и сеттеры к ним.


class Driver extends Employee
{
    private int $drivingExperience;
    private string $drivingCategory;

    /**
     * @return int
     */
    public function getDrivingExperience(): int
    {
        return $this->drivingExperience;
    }

    /**
     * @param int $drivingExperience
     */
    public function setDrivingExperience(int $drivingExperience): void
    {
        $this->drivingExperience = $drivingExperience;
    }

    /**
     * @return string
     */
    public function getDrivingCategory(): string
    {
        return $this->drivingCategory;
    }

    /**
     * @param string $drivingCategory
     */
    public function setDrivingCategory(string $drivingCategory): void
    {
        $this->drivingCategory = $drivingCategory;
    }
}
?>