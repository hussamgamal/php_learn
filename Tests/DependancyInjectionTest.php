<?php
namespace Tests;

use App\DependancyInjection\Container;
use App\DependancyInjection\Order;
use App\DependancyInjection\Product;
use PhpParser\Node\Expr\Instanceof_;
use PHPUnit\Framework\TestCase;

/**
 * ClassNameTest
 * @group group
 */
class DependancyInjectionTest extends TestCase
{
    /** @test */
    // public function test_function()
    // {
    //     // Test
    //     // $this->assertTrue(false);
    //     $var = '1';
    //     $this->assertSame($var , "1");
    // }

    // /**
    //  * @dataProvider additionProvider
    //  */
    // public function test_add($a , $b , $result){
    //     $this->assertSame($result, $a + $b);
    // }

    // public function additionProvider(){
    //     return [ 
    //         [1 , 1 , 2],
    //         [2 , 2 , 5],
    //         [3 , 7 , 9]
    //     ];
    // }


    public function test_product(){
        $container = new Container('test product' , 100);
        $product = $container->createProduct();
        $this->assertInstanceOf(Product::class , $product , "this is not product");
    }

    public function test_order(){
        $container = new Container('test product' , 100);
        $product = $container->createProduct();
        $order = $container->createOrder($product);
        $this->assertInstanceOf(Order::class, $order);
    }

}
