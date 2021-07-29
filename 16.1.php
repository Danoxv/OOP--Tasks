<?php

//Задача 16.1
//Не подсматривая в мой код реализуйте такой же класс Arr и вызовите его метод getSum сразу после создания объекта.

class Arr {

    public array $numbers = [];

    public function __construct(array $numbers)
    {
        $this->numbers = $numbers;
    }

    public function add(int $number)
    {
        $this->numbers[] = $number;
    }

    public function getSum(): int
    {
        return array_sum($this->numbers);
    }

}

echo (new Arr([1, 2, 3]))->getSum();
?>