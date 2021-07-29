<?php

class Employee {

    private string $name;
    private int $age;
    private int $salary;

    public function setName(string $name)
    {
        $this->name = $name;
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
     * @param type $age
     * @return void
     */
    public function setAge( int $age): void
    {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }
/**
 * 
 * @return int
 */
    public function getAge(): int
    {
        return $this->age;
    }
/**
 * 
 * @param int $salary
 * @return string
 */
    public function setSalary(int $salary): string
    {
        $this->salary = $salary . '$';
    }
/**
 * 
 * @return int
 */
    public function getSalary(): int
    {
        return $this->salary;
    }
/**
 * 
 * @param int $age
 * @return bool
 */
    private function isAgeCorrect(int $age): bool
    {
        return $age >= 1 && $age <= 100;
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