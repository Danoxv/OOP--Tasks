<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

//class Employee {
//
//    public $name;
//    public $salary;
//
//    public function __construct($name, $salary)
//    {
//        $this->name = $name;
//
//        $this->salary = $salary;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function getSalary()
//    {
//        return $this->salary;
//    }
//
//}
//
//class Student {
//
//    public $names;
//    public $scholarship;
//
//    public function __construct($name, $scholarship)
//    {
//        $this->names = $name;
//        $this->scholarship = $scholarship;
//    }
//
//    public function getName()
//    {
//        return $this->names;
//    }
//
//    public function getScholarship()
//    {
//        return $this->scholarship;
//    }
//
//}
//function adduser($obj)
//{                                   //      как вариант добавления в массив объектов 
//    $arr_sh_e_s = [];
//    return $arr_sh_e_s[] = $obj;
//    
//}
//adduser(new Employee('вадик', 500));
//adduser(new Employee('вадик', 500));
//adduser(new Employee('вадик', 500));
//adduser(new Student('вадик', 500));
//adduser(new Student('вадик', 500));
//adduser(new Student('вадик', 500));
//$arr = [];
//
//$arr[] = new Employee('вадик', 500);
//$arr[] = new Employee('стасик', 500);
//$arr[] = new Employee('гена', 500);
//$arr[] = new Student('жорик', 2500);
//$arr[] = new Student('володя ', 2500);
//$arr[] = new Student('пашка ', 2500);
//
//foreach ($arr as $user) {
//    $user->getName();
//}
//var_dump($arr);
//$sum = 0;
//$sum1 = 0;
//foreach ($arr as $coin) {
//    if ($coin instanceof Employee) {
//        $sum += $coin->salary;
//    }
//    
//     if ($coin instanceof Student){
//     $sum1 += $coin->scholarship;}
//}
//echo $sum + $sum1;
//class User {
//
//    private $name;
//    private $surname;
//
//    public function __construct($name, $surname)
//    {
//        $this->name = $name;
//        $this->surname = $surname;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function getSurname()
//    {
//        return $this->surname;
//    }
//
//}
//class Employee extends User {
//
//    private $salary;
//
//    public function __construct($name, $surname, $salary)
//    {
//        $this->salary = $salary;
//        parent::__construct($name, $surname);
//    }
//
//    public function getSalary()
//    {
//        return $this->salary;
//    }
//
//}
//class City {
//
//    private $name;
//    private $population;
//
//    public function __construct($name, $population)
//    {
//        $this->name = $name;
//        $this->population = $population;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//    }

/**
 * 
 * @return type
 */
//    public function getPopulation()
//    {
//        return $this->population;
//    }
//
//}
//$arr = [];
//
//$arr[] = new User('вадик', 'вадиков');
//$arr[] = new User('стасик', 'стасиков');
//$arr[] = new User('гена', 'генков');
//
//$arr[] = new Employee('жорик', 'Жориков', 2500);
//$arr[] = new Employee('володя ', 'володевич', 2500);
//$arr[] = new Employee('пашка ', 'пашкевич', 2500);
//
//$arr[] = new City('Белгород', 365);
//$arr[] = new City('Харьков  ', 1444);
//$arr[] = new City('Беларусь ', 9500);
//
////var_dump($arr);
//foreach ($arr as $obj) {
//    if ($obj instanceof User) {
//        //echo $obj->getName() . '<br/>';
//    }
//}
//foreach ($arr as $obj) {
//    if (!$obj instanceof User) {
//        // echo $obj->getName() . '<br/>';
//    }
//}
//foreach ($arr as $obj) {
//    if (!$obj instanceof City && !$obj instanceof Employee) { //двойные скобки не работают 
//        echo $obj->getName() . '<br/>';
//    }
//}



class Employee {

    private $name; // имя
    private $salary; // зарплата

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    // Геттер имени:
    public function getName()
    {
        return $this->name;
    }

    // Геттер зарплаты:
    public function getSalary()
    {
        return $this->salary;
    }

}

class Student {

    private $name; // имя
    private $scholarship; // стипендия

    public function __construct($name, $scholarship)
    {
        $this->name = $name;
        $this->scholarship = $scholarship;
    }

    // Геттер имени:
    public function getName()
    {
        return $this->name;
    }

    // Геттер стипендии:
    public function getScholarship()
    {
        return $this->scholarship;
    }

}

class UsersCollection {

    private $employees = [];
    private $students = [];

    // Добавление в массивы:
    public function add($user)
    {
        if ($user instanceof Employee) {
            $this->employees[] = $user;
        }

        if ($user instanceof Student) {
            $this->students[] = $user;
        }
    }

    public function getTotalSalary()
    {
        $sum = 0;

        foreach ($this->employees as $employee) {
            $sum += $employee->getSalary();
        }

        return $sum;
    }

    public function getTotalScholarship()
    {
        $sum = 0;

        foreach ($this->students as $student) {
            $sum += $student->getScholarship();
        }

        return $sum;
    }

    public function getTotalPayment()
    {
        return $this->getTotalScholarship() + $this->getTotalSalary();
    }

}

$usersCollection = new UsersCollection;

$usersCollection->add(new Student('Петя', 100));
$usersCollection->add(new Student('Ваня', 200));

$usersCollection->add(new Employee('Коля', 300));
$usersCollection->add(new Employee('Вася', 400));

echo $usersCollection->getTotalScholarship();

echo $usersCollection->getTotalSalary();

echo $usersCollection->getTotalPayment();
?>