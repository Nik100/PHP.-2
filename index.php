<?php
include_once 'AbstractProduct.php';
include_once 'DigitalProduct.php';
include_once 'Product.php';
include_once 'WeightProduct.php';

$digitalProduct = new DigitalProduct('Gift card');
$product = new Product('Coffee');
$weightProduct = new WeightProduct('Tomato', 0.3);

echo 'name: ' . $digitalProduct->getName() . PHP_EOL;
echo 'price: ' . $digitalProduct->getPrice() . PHP_EOL;

echo 'name: ' . $product->getName() . PHP_EOL;
echo 'price: ' . $product->getPrice() . PHP_EOL;

echo 'name: ' . $weightProduct->getName() . PHP_EOL;
echo 'price: ' . $weightProduct->getPrice() . PHP_EOL;
?>
