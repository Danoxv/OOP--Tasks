<?php

//Задача 9.1
//Сделайте класс Employee, в котором будут следующие свойства: name (имя), surname (фамилия) и salary (зарплата).

class Employee {

    private string $name;
    private string $surname;
    private int $salary;

    /**
     * 
     * @param string $name
     * @param string $surname
     */
    // Задача 9.2
    // Сделайте так, чтобы свойства name и surname были доступны только для чтения, а свойство salary - и для чтения, и для записи.
    public function __construct(string $name, string $surname)
    {
        $this->name = $name;
        $this->surnaname = $surname;
    }

    /**
     * 
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * 
     * @return int
     */
    public function getsurname(): int
    {
        return $this->age;
    }

    /**
     * 
     * @param int $salary
     */
    public function setSalary(int $salary)
    {
        $this->salary = $salary . '$';
    }

    /**
     * 
     * @return int
     */
    public function getsalary(): int
    {
        return $this->salary;
    }

}

?>