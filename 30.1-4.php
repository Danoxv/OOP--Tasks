<?php

//class Num {
//
//    public static $num1;
//    public static $num2;
//
//}
//
//num::$num1 = 2;
//num::$num2 = 3;
//
//echo num::$num1 + num::$num2;
//class Num {
//
//    private static $num1 = 2;
//    private static $num2 = 3;
//
//    public static function getSum()
//    {
//     return self::$num1 + self::$num2;
//    }
//}
//echo Num::getSum();


class Geometry {

    private static $pi = 3.14; // вынесем Пи в свойство

    public static function getCircleSquare($radius)
    {
        return self::$pi * $radius * $radius;
    }

    public static function getCircleСircuit($radius)
    {
        return 2 * self::$pi * $radius;
    }

    public static function volBallrad($radius)
    {
        return 4/3*self::$pi* $radius* $radius* $radius;
    }

}
echo Geometry::volBallrad(10);
?>