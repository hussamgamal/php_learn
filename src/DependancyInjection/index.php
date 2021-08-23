<?php


$product = new Product('Test1' , 100);
$order = new Order($product);
var_dump($order);
