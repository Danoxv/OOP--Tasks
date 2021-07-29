<?php

//Задача 12.1
//Не подсматривая в мой код реализуйте такой же класс Student.

class Student {

    public string $name;
    public int $course;

    /**
     * 
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->course = 1;
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
     * @return int
     */
    public function getCourse(): int
    {
        return $this->course;
    }

    /**
     * 
     * @return void
     */
    public function transferToNextCourse(): void
    {
        // Задача 12.2
        // Модифицируйте метод transferToNextCourse так, чтобы при переводе на новый курс выполнялась проверка того,
        // что новый курс не будет больше 5.
        $nextCourse = $this->course + 1;

        if ($nextCourse > 5) {
            return;
        }

        $this->course = $nextCourse;
    }

}

$student = new Student('Ruslan');
echo $student->getName();

echo $student->getCourse();
$student->transferToNextCourse();
echo $student->getCourse();
?>