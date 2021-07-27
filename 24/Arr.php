<?php

/*
 * Задача 24.1
 * Самостоятельно повторите описанные мною классы Arr и SumHelper.
 */

require_once 'SumHelper.php';
require_once 'AvgHelper.php';

class Arr
{
    /** @var int[] */
    private array $nums = [];

    /** @var SumHelper */
    private SumHelper $sumHelper;

    /** @var AvgHelper */
    private AvgHelper $avgHelper;

    /**
     * Arr constructor.
     */
    public function __construct()
    {
        $this->sumHelper = new SumHelper();
        $this->avgHelper = new AvgHelper();
    }

    /**
     * @return float|int
     */
    public function getSum23(): float|int
    {
        $nums = &$this->nums;

        return $this->sumHelper->getSum2($nums) + $this->sumHelper->getSum3($nums);
    }

    /**
     * @param int $number
     */
    public function add(int $number): void
    {
        $this->nums[] = $number;
    }
    
    /*
     * Задача 24.4
     * Добавьте в класс Arr метод getAvgMeanSum, который будет находить сумму среднего арифметического и среднего квадратичного из массива $this->nums.
     */
    /**
     * @return float|int
     */
    public function getAvgMeanSum(): float|int
    {
        $nums = &$this->nums;

        return $this->avgHelper->getAvg($nums) + $this->avgHelper->getMeanSquare($nums);
    }
}