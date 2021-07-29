<?php

class User {

    private string $name;
    protected int $age; // изменим модификатор доступа на protected

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
     * @return void
     */
    public function setName(string $name): void
    {
        if (iconv_strlen($name) > 3) {
            $this->name = $name;
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
     * @param int $age
     */
    public function setAge(int $age)
    {
        if ($age >= 18) {
            $this->age = $age;
        }
    }

}

class Student extends User {

    private int $course;

    /**
     * 
     * @param string $name
     * @return void
     */
    public function setName(string $name): void
    {

        if (mb_strlen($name)) < 10) {
            parent::setName($name);
        }
    }

    /**
     * 
     * @param int $age
     */
    public function setAge(int $age)
    {
        // Если возраст меньше или равен 25:
        if ($age <= 25) {
            // Вызываем метод родителя:
            parent::setAge($age); // в родителе выполняется проверка age >= 18
        }
    }

    /**
     * 
     * @return int
     */
    public function getCourse(): int
    {
        return $this->course;
    }

    /**
     * 
     * @param int $course
     */
    public function setCourse(int $course)
    {
        $this->course = $course;
    }

}

?>