<?php

class Student {

    public $name;
    public $course;

    public function __construct($name)
    {
        $this->name = $name;
        $this->course = 1;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function transferToNextCourse()
    {
        if ($this->course >= 5) {
            $this->course = 4;
        } else {
            $this->course++;
        }
    }

}

$student = new Student('Ruslan');
echo $student->getName();

echo $student->getCourse();
$student->transferToNextCourse();
echo $student->getCourse();
?>