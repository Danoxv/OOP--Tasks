<?php

class User {

    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

}

class Employee {

    private $name;
    private $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }

}

class EmployeesCollection {

    private $employees = [];

    public function add($newEmployee)
    {
        
        if(!in_array($newEmployee, $this->employees,true))
        {
            $this->employees[] = $newEmployee;
        }
    }

    public function get()
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
$employeesCollection->add(new User('Витя',40));
var_dump($employeesCollection->get());
    echo compare(new User('Коля', 30), new User('Коля', 30));
?>