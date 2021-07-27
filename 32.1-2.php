<?php

class Circle {

    const PI = 3.14; // запишем число ПИ в константу

    private $radius; // радиус круга

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    // Найдем площадь:
    public function getSquare()
    {
        return self::PI * $this->radius * $this->radius;
        //  умножить на квадрат радиуса
    }

    // Найдем длину окружности:
    public function getCircuit()
    {
        return (2 * self::PI) * $this->radius;
    }

}

$circ = new Circle(10);
echo $circ->getSquare().'<br/>';
echo $circ->getCircuit().'<br/>';
?>