<?php
class Employee {

    private $name;
    private $age;
    private $salary ;

    public function setName($name)
    {
        $this->name = $name;
    }
     public function getName()
    {
        return $this->name;
    }
    
     public function setAge($age)
    {
        if ($this->isAgeCorrect($age)) {
           $this->age = $age;
        }
    }
     public function getAge()
    {
        return $this->age;
    }
    
    public function setSalary($salary)
    {
        $this->salary = $salary.'$';
    }
     public function getSalary()
    {
        return $this->salary;
    }
    
    private function isAgeCorrect($age)
    {
        return $age>=1 && $age<=100 ;
    }
}
    $user = new Employee;
    $user->setName('pavel1');
    echo $user->getName();
    
     $user->setAge('444');
    echo $user->getAge();
    
     $user->setSalary("500");
    echo $user->getSalary();
    ?>