<?php

use App\DependancyInjection\Container;
use App\DependancyInjection\Product;

$loader = require 'vendor/autoload.php';

$a = new Product('Tessssssssttt' , 100);
var_dump($a);


$container = new Container('test product' , 50);
$product = $container->createProduct();
$order = $container->createOrder($product);
var_dump($order);