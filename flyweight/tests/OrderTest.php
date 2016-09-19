<?php

namespace Acme\Acme\Tests;

use Acme\Acme\CoffeeFlavour;
use Acme\Acme\Order;

class OrderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldPrintOrder()
    {
        $coffee = $this->getMockBuilder(CoffeeFlavour::class)
            ->disableOriginalConstructor()
            ->getMock();

        $coffee->expects($this->any())
            ->method('__toString')
            ->willreturn('Espresso');

        $order = new Order(1, $coffee);

        $this->assertEquals('Serving Espresso to table 1', $order->serve());
    }
}
