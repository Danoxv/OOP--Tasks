<?php
class Employee {

    private $name;
    private $surname;
    private $salary;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surnaname = $surname;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getsurname()
    {
        return $this->age;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary . '$';
    }

     public function getsalary()
    {
        return $this->salary;
    }
    
}

$user = new Employee('gsfdddddddddddddd111111111111111111111tnz','fdgnsgbfshn');
echo $user->getName();
$user->setSalary("500");
echo $user->getSalary();
?>