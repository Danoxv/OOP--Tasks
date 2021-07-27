<?php

class Product {
    public $name  = 'вася ' ;
    private $price  ;
}
$product1 = new Product();
$product2 = $product1;
echo $product2->name;
?>