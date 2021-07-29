<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

class Product {

    private string $name;
    private int $price;
    private int $quantity;

    public function __construct(string $name, int $price, int $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }
/**
 * 
 * @return string
 */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * 
     * @return int
     */
    public function getPrice():int
    
    {
        return $this->price;
    }
/**
 * 
 * @return int
 */
    public function getQuantity():int
    {
        return $this->quantity;
    }
/**
 * 
 * @return int
 */
    public function getCost():int 
    {
        return $this->price * $this->quantity;
    }

}

class Cart {

    private $products;
/**
 * 
 * @param Product $product
 */
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
/**
 * 
 * @return int
 */
    public function getTotalQuantity():int 
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->getQuantity();
        }
        return $sum;
    }
/**
 * 
 * @return int
 */
    public function getAvgPrice():int 
    {
        return $this->getTotalCost() / count($this->products);
    }

}

$Cart = new Cart;
$Cart->add(new Product('Игрушка', 100, 10));
$Cart->add(new Product('Игрушка1', 200, 10));
$Cart->add(new Product('Игрушка2', 300, 10));

echo $Cart->remove('Игрушка') . '<br/>';
echo $Cart->getTotalCost() . '<br/>'; //выводит сумарную стоимость 
echo $Cart->getTotalQuantity() . '<br/>'; //общее количество 
echo $Cart->getAvgPrice() . '<br/>'; //выводит среднюю стоимость продуктов в корзине 
?>
