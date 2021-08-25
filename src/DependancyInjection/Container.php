<?php 
namespace App\DependancyInjection;

class Container{
    public $name;
    public $price;

    public function __construct($name , $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    

    public function createProduct(){
        return new Product($this->name , $this->price);
    }

    public function createOrder($product){
        return new Order($product);
    }
}

/**
 * فايدة ال container انو بيقلل ال duplication ف الكود 
 * وبيخليك تقدر تعمل inject لكلاس ف كلاس تانى من مكان واحد 
 * بحيث انو لو حصل اى ابديت للكلاش اللى معموله inject
 * يكون لتغيير ف مكان واحد بس مش فى كل الكلاسات اللى كانت معتمده عليه
 */