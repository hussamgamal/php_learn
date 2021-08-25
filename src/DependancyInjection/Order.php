<?php
namespace App\DependancyInjection;

use App\DependancyInjection\Product;

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

/**
 * اللى معمول هنا ده اسمها 
 * DI : dependancy injection
 * بحيث ان الكلاس دا معتمد على كلاس ال product 
 * فانا بعمله inject ف الكونستركتر
 */