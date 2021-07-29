<?php

// Задача 13.1
// Реализуйте класс Arr, похожий на тот, который я реализовал выше.
// В отличие от моего класса метод add вашего класса параметром должен принимать массив чисел.
// Все числа из этого массива должны добавляться в конец массива $this->numbers.
class Arr {

    /**
     * 
     * @var int[]
     */
    private array $numbers = [];

    public function add(array $numbers): void
    {
        foreach ($numbers as $number) {
            if (!in_array($number, $this->numbers)) {
                $this->numbers[] = $number;
            }
        }
    }

//Задача 13.2
//Вместо метода getSum реализуйте метод getAvg, который будет находить среднее арифметическое переданных чисел.

    /**
     * 
     * @return int|float
     */
    public function getAvg(): int|float
    {
        return array_sum($this->numbers) / count($this->numbers);
    }

}

$numbers = [1, 2, 3, 4, 5];
$arr = new Arr;
$arr->add($numbers);
echo $arr->getAvg();
?>