<?php

class User {

    private string $name;
    private int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
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
    public function getAge(): int
    {
        return $this->age;
    }

}

class Employee {

    private string $name;
    private int $salary;

    public function __construct(string $name, int $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
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
    public function getSalary(): int
    {
        return $this->salary;
    }

}

class EmployeesCollection {

    private array $employees = [];
    
    public function add(object $newEmployee)
    {

        if (!in_array($newEmployee, $this->employees, true)) {
            $this->employees[] = $newEmployee;
        }
    }
/**
 * 
 * @return array
 */
    public function get():array
    {
        return $this->employees;
    }

}

function compare($obj, $obj1)
{
    if ($obj == $obj1) {
        return 'true';
    } else {
        return 'false';
    }
}

function compare2($obj, $obj1)
{
    if ($obj === $obj1) {
        return 'true';
    } else {
        return 'false';
    }
}

function compare3($obj, $obj1)
{
    if ($obj === $obj1) {
        return '1';
    } elseif ($obj == $obj1) {
        return '0';
    } else {
        return '-1';
    }
}

$user1 = new User('Коля', 30);
$user2 = $user1;
echo compare($user1, $user2);
$employeesCollection = new EmployeesCollection;
$employeesCollection->add(new User('Витя', 40));
var_dump($employeesCollection->get());
echo compare(new User('Коля', 30), new User('Коля', 30));
?>