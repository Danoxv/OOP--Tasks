<?php
/*
 * Модификаторы доступа public и private
 * http://code.mu/ru/php/book/oop/access-modifiers-public-and-private/
 */

// Задача 6.3
// Сделайте класс Student со свойствами $name и $course (курс студента, от 1-го до 5-го).
class Student
{
    private string $name;
    private int $course;

    // Задача 6.4
    // В классе Student сделайте public метод transferToNextCourse, который будет переводить студента на следующий курс.
    public function transferToNextCourse()
    {
        // Задача 6.5
        // Выполните в методе transferToNextCourse проверку на то, что следующий курс не больше 5.
        $nextCourse = $this->course + 1;

        if ($this->isCourseCorrect($nextCourse)) {
            $this->course = $nextCourse;
        }
    }

    // Задача 6.6
    // Вынесите проверку курса в отдельный private метод isCourseCorrect.
    private function isCourseCorrect(int $course)
    {
        return $course <= 5;
    }
}