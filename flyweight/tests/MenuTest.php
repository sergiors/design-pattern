<?php

namespace Acme\Acme\Tests;

use Acme\Acme\Menu;
use Acme\Acme\CoffeeFlavour;

class MenuTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturnSameCoffee()
    {
        $menu = new Menu();
        $coffee = $menu->lookup('Frappe');
        $coffee2 = $menu->lookup('Frappe');

        $this->assertInstanceOf(CoffeeFlavour::class, $coffee);
        $this->assertEquals($coffee, $coffee2);
        $this->assertEquals(1, $menu->totalCoffeeFlavoursMade());
    }
}
