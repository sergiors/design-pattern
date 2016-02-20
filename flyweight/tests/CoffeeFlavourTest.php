<?php

namespace Acme\Acme\Tests;

use Acme\Acme\CoffeeFlavour;

class CoffeeFlavourTests extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldPrintCoffeeName()
    {
        $this->expectOutputString('Cappuccino');
        $coffee = new CoffeeFlavour('Cappuccino');
        
        echo $coffee;
    }
}
