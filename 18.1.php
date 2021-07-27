<?php

class ArrayAvgHelper
{
    /**
     * Находит сумму первых
     * степеней элементов массива
     *
     * @param int[] $arr
     * @return int|float
     */
    public function getAvg1($arr): int|float
    {
        $power = 1;
        return $this->calcSqrt($this->getSum($arr, $power), $power);
    }

    /**
     * Находит сумму вторых степеней
     * элементов массива и извлекает
     * из нее квадратный корень
     *
     * @param int[] $arr
     * @return float|int
     */
    public function getAvg2($arr): int|float
    {
        $power = 2;
        return $this->calcSqrt($this->getSum($arr, $power), $power);
    }

    /**
     * Находит сумму третьих степеней
     * элементов массива и извлекает
     * из нее кубический корень
     *
     * @param int[] $arr
     * @return int|float
     */
    public function getAvg3($arr): int|float
    {
        $power = 3;
        return $this->calcSqrt($this->getSum($arr, $power), $power);
    }

    /**
     * Находит сумму четвертых степеней
     * элементов массива и извлекает
     * из нее корень четвертой степени:
     *
     * @param int[] $arr
     * @return int|float
     */
    public function getAvg4(array $arr): int|float
    {
        $power = 4;
        return $this->calcSqrt($this->getSum($arr, $power), $power);
    }

    /**
     * Вспомогательный метод, который параметром
     * принимает массив и степень и возвращает
     * сумму степеней элементов массива.
     *
     * @param int[] $arr
     * @param int $power
     * @return int|float
     */
    private function getSum(array $arr, int $power): int|float
    {
        $sum = 0;

        foreach ($arr as $value) {
            $sum += $value ** $power;
        }

        return $sum;
    }

    /**
     * Вспомогательный метод, который параметром
     * принимает целое число и степень и возвращает
     * корень заданной степени из числа.
     *
     * @param int|float $num
     * @param int $power
     * @return int|float
     */
    private function calcSqrt(int|float $num, int $power)
    {
        if ($power === 1) {
            return $num;
        }

        return $num ** (1 / $power);
    }
}