<?php

class User {

    private $name;
    protected $age; // объявим свойство как protected

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

}
class Student extends User {
    protected $course;
    
    public function setCourse($int)
    {
        $this->course = $int;
    }
    public function getCourse()
    {
        return $this->course;
    }
    public function addOneYear()
    {
         $this->age++;
    }
    
}
$student = new Student();
	
	$student->setName('Коля'); // установим имя
	$student->setCourse(3); // установим курс
	$student->setAge(25); // установим возраст в 25
	
	$student->addOneYear(); // увеличим возраст на единицу
	echo $student->getAge(); //!! выведет 26
//        ?>