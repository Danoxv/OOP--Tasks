<?php

class User {

    private $name;
    protected $age; // изменим модификатор доступа на protected

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        if (iconv_strlen($name) > 3) {
            $this->name = $name;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if ($age >= 18) {
            $this->age = $age;
        }
    }

}

class Student extends User {

    private $course;

    public function setName($name)
    {

        if (iconv_strlen($name) < 10) {
            parent::setName($name);
        }
    }

    public function setAge($age)
    {
        // Если возраст меньше или равен 25:
        if ($age <= 25) {
            // Вызываем метод родителя:
            parent::setAge($age); // в родителе выполняется проверка age >= 18
        }
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

}

?>