<?php

class Arr {

    private $numbers = [];

    public function add(array $numbers)
    {
        foreach ($numbers as $number) {
            if (!in_array($number, $this->numbers)) {
                $this->numbers[] = $number;
            }
        }
    }

    public function getAvg()
    {
        return array_sum($this->numbers)/count($this->numbers);
    }
}

$numbers = [1, 2, 3, 4, 5];
$arr = new Arr;
$arr->add($numbers);
echo $arr->getAvg();
?>