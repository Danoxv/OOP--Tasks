<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

class Employee {

    public string $name;
    public int $salary;

    public function __construct(string $name, int $salary)
    {
        $this->name = $name;

        $this->salary = $salary;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }

}

class Student {

    public string $names;
    public int $scholarship;

    public function __construct(string $name, int $scholarship)
    {
        $this->names = $name;
        $this->scholarship = $scholarship;
    }

    public function getName(): string
    {
        return $this->names;
    }

    public function getScholarship(): int
    {
        return $this->scholarship;
    }

}

function adduser($obj)
{                                   //      как вариант добавления в массив объектов 
    $arr_sh_e_s = [];
    return $arr_sh_e_s[] = $obj;
}

adduser(new Employee('вадик', 500));
adduser(new Employee('вадик', 500));
adduser(new Employee('вадик', 500));
adduser(new Student('вадик', 500));
adduser(new Student('вадик', 500));
adduser(new Student('вадик', 500));

$arr[] = new Employee('вадик', 500);
$arr[] = new Employee('стасик', 500);
$arr[] = new Employee('гена', 500);
$arr[] = new Student('жорик', 2500);
$arr[] = new Student('володя ', 2500);
$arr[] = new Student('пашка ', 2500);

$arr = [];

foreach ($arr as $user) {
    $user->getName();
}
var_dump($arr);
$sum = 0;
$sum1 = 0;
foreach ($arr as $coin) {
    if ($coin instanceof Employee) {
        $sum += $coin->salary;
    }

    if ($coin instanceof Student) {
        $sum1 += $coin->scholarship;
    }
}
echo $sum + $sum1;

class User {

    private string $name;
    private  string $surname;

    public function __construct(string $name,  string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getSurname():string
    {
        return $this->surname;
    }

}

class Employee extends User {

    private int $salary;

    public function __construct(string$name, string $surname, int  $salary)
    {
        $this->salary = $salary;
        parent::__construct( $name,$surname);
    }

    public function getSalary():int 
    {
        return $this->salary;
    }

}

class City {

    private string $name;
    private  int $population;

    public function __construct(string $name, int  $population)
    {
        $this->name = $name;
        $this->population = $population;
    }

    public function getName():string
    {
        return $this->name;
    }

    /**
     * 
     * @return type
     */
    public function getPopulation():int 
    {
        return $this->population;
    }

}

$arr = [];

$arr[] = new User('вадик', 'вадиков');
$arr[] = new User('стасик', 'стасиков');
$arr[] = new User('гена', 'генков');

$arr[] = new Employee('жорик', 'Жориков', 2500);
$arr[] = new Employee('володя ', 'володевич', 2500);
$arr[] = new Employee('пашка ', 'пашкевич', 2500);

$arr[] = new City('Белгород', 365);
$arr[] = new City('Харьков  ', 1444);
$arr[] = new City('Беларусь ', 9500);

//var_dump($arr);
foreach ($arr as $obj) {
    if ($obj instanceof User) {
        //echo $obj->getName() . '<br/>';
    }
}
foreach ($arr as $obj) {
    if (!$obj instanceof User) {
        // echo $obj->getName() . '<br/>';
    }
}
foreach ($arr as $obj) {
    if (!$obj instanceof City && !$obj instanceof Employee) { //двойные скобки не работают 
        echo $obj->getName() . '<br/>';
    }
}

class Employee {

    private string $name; // имя
    private  int $salary; // зарплата

    public function __construct(string $name, int  $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    // Геттер имени:
    public function getName():string
    {
        return $this->name;
    }

    // Геттер зарплаты:
    public function getSalary():int 
    {
        return $this->salary;
    }

}

class Student {

    private string $name; // имя
    private  int $scholarship; // стипендия

    public function __construct(string $name,  int $scholarship)
    {
        $this->name = $name;
        $this->scholarship = $scholarship;
    }

    // Геттер имени:
    public function getName():string
    {
        return $this->name;
    }

    // Геттер стипендии:
    public function getScholarship():int 
    {
        return $this->scholarship;
    }

}

class UsersCollection {

    private  array $employees = [];
    private  array $students = [];

    // Добавление в массивы:
    public function add($user):void 
    {
        if ($user instanceof Employee) {
            $this->employees[] = $user;
        }

        if ($user instanceof Student) {
            $this->students[] = $user;
        }
    }

    public function getTotalSalary():int 
    {
        $sum = 0;

        foreach ($this->employees as $employee) {
            $sum += $employee->getSalary();
        }

        return $sum;
    }

    public function getTotalScholarship():int 
    {
        $sum = 0;

        foreach ($this->students as $student) {
            $sum += $student->getScholarship();
        }

        return $sum;
    }

    public function getTotalPayment():int 
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