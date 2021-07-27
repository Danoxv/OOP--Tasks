<?php

class SumHelper
{
    /**
     * @param int[] $arr
     * @return float|int
     */
    public function getSum1(array $arr): float|int
    {
        return $this->getSum($arr, 1);
    }

    /**
     * @param int[] $arr
     * @return float|int
     */
    public function getSum2(array $arr): float|int
    {
        return $this->getSum($arr, 2);
    }

    /**
     * @param int[] $arr
     * @return float|int
     */
    public function getSum3(array $arr): float|int
    {
        return $this->getSum($arr, 3);
    }

    /**
     * @param int[] $arr
     * @param int $power
     * @return int|float
     */
    private function getSum(array $arr, int $power): float|int
    {
        $sum = 0;

        foreach ($arr as $elem) {
            $sum += $elem ** $power;
        }

        return $sum;
    }
}