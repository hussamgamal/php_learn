<?php
namespace DependancyInjection;

class Order{
    public $product;

    public function __construct(Product $product)
    {
        $this->product = $product;        
    }
    
    public function createOrder(){
        return $this->product;
    }
}