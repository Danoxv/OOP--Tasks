<?php

class Userr {

    protected $name;
    protected $age;

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

class Student extends Userr {

    private $course;

    public function __construct($name, $age, $course)
    {

        $this->name = $name;
        $this->age = $age;

        $this->course = $course;
    }

    public function getCourse()
    {
        return $this->course;
    }

}

$student = new Student('Вадик', 16, 1);

echo $student->getName();
echo $student->getAge();
echo $student->getCourse();

class User {

    private $name;
    private $surname;
    private $birthday;
    private $age;

    public function __construct($name, $surname, $birthday)
    {
        $this->name = $name;
        $this->surname = $surname;

        $this->birthday = $birthday;
        $this->age = $this->calculateAge($birthday);
    }

    private function calculateAge($dt)
    {
        $origin = new DateTime($dt);
        $target = new DateTime(date("Ymd"));
        $interval = $origin->diff($target);

        return $interval->format("%y  %m  %d");
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getDateBirt()
    {
        return $this->birthday;
    }

    public function getAge()
    {
        return $this->age;
    }

}

class Employee extends User {

    private $salary;

    public function __consruct($name, $surname, $birthday, $salary)
    {
        parent::__construct($name, $surname, $birthday);
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }

}

$user = new User("rgj", "fgdfbgfdhbg", '1996-01-09');
echo $user->getAge();
?>