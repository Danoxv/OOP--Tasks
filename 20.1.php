<?php

class User {

    /**
     * 
     * @var string
     */
    private string $name;

    /**
     * 
     * @var int
     */
    protected int $age; // объявим свойство как protected

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
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }

}

class Student extends User {

    /**
     * 
     * @var int
     */
    protected int $course;

    /**
     * 
     * @param int $int
     */
    public function setCourse(int $int)
    {
        $this->course = $int;
    }

    public function getCourse(): int
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
?>