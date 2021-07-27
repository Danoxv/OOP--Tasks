<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

class Product {

    private $name;
    private $price;
    private $quantity;

    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getCost()
    {
        return $this->price * $this->quantity;
    }

}

class Cart {

    private $products;

    public function add(Product $product)//ожидается объект этого класса 
    {
        $this->products[] = $product;
//var_dump($this->products);
    }

    public function remove($namepr)
    {

        foreach ($this->products as $k => $product) {
            if ($product->getName() === $namepr) {
                unset($this->products[$k]);
            }
        }
    }

    public function getTotalCost()
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->getPrice();
        }
        return $sum;
    }

    public function getTotalQuantity()
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->getQuantity();
        }
        return$sum;
    }

    public function getAvgPrice()
    {
        return $this->getTotalCost()/count( $this->products);
    }

}

$Cart = new Cart;
$Cart->add(new Product('Игрушка', 100, 10));
$Cart->add(new Product('Игрушка1', 200, 10));
$Cart->add(new Product('Игрушка2', 300, 10));

echo $Cart->remove('Игрушка').'<br/>';
echo $Cart->getTotalCost().'<br/>'; //выводит сумарную стоимость 
echo $Cart->getTotalQuantity().'<br/>';//общее количество 
echo  $Cart->getAvgPrice().'<br/>';//выводит среднюю стоимость продуктов в корзине 

?>
