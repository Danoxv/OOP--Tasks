<?php

class Product {

    public string $name = 'вася ';
    private int $price;

}

$product1 = new Product();
$product2 = $product1;
echo $product2->name;
?>