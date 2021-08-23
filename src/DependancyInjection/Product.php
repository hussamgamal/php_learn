<?php
namespace DependancyInjection;

class Product{
    /**
     * هنعمل كلاس للمنتج هيبأى فيه الخصايص بتاعتة 
     */
    public $name;
    public $price;

    public function __construct($name , $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}