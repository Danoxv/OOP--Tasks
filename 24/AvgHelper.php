<?php

/*
 * Задача 24.2
 * Создайте класс AvgHelper с методом getAvg, который параметром будет принимать массив
 * и возвращать среднее арифметическое этого массива (сумма элементов делить на количество).
 */

require_once 'SumHelper.php';

class AvgHelper
{
    /** @var SumHelper */
    private SumHelper $sumHelper;

    /**
     * AvgHelper constructor.
     */
    public function __construct()
    {
        $this->sumHelper = new SumHelper();
    }

    /**
     * @param int[] $arr
     * @return float|int
     */
    public function getAvg(array $arr): float|int
    {
        return $this->sumHelper->getSum1($arr) / count($arr);
    }

    /**
     * @param int[] $arr
     * @return float|int
     */
    private function getAvg2(array $arr): float|int
    {
        return $this->sumHelper->getSum2($arr) / count($arr);
    }

    /*
     * Задача 24.3
     * Добавьте в класс AvgHelper еще и метод getMeanSquare,
     * который параметром будет принимать массив и возвращать среднее квадратичное этого массива
     * (квадратный корень, извлеченный из суммы квадратов элементов, деленной на количество).
     */
    /**
     * @param int[] $arr
     * @return float
     */
    public function getMeanSquare(array $arr): float
    {
        return sqrt($this->getAvg2($arr));
    }
}