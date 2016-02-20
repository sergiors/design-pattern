<?php

namespace Acme\Acme\Tests;

use Acme\Acme\CoffeeShop;

class CoffeeShopTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldPrintOverviewCoffeeShop()
    {
        $output = "Serving Cappuccino to table 2\n"
                . "Serving Frappe to table 1\n"
                . "Serving Espresso to table 1\n"
                . "Serving Frappe to table 897\n"
                . "Serving Cappuccino to table 97\n"
                . "Serving Frappe to table 3\n"
                . "Serving Espresso to table 3\n"
                . "Serving Cappuccino to table 3\n"
                . "Serving Espresso to table 96\n"
                . "Serving Frappe to table 552\n"
                . "Serving Cappuccino to table 121\n"
                . "Serving Espresso to table 121\n"
                . "Total CoffeeFlavour objects made: 3";

        $this->expectOutputString($output);

        $shop = new CoffeeShop();
        $shop->takeOrder('Cappuccino', 2);
        $shop->takeOrder('Frappe', 1);
        $shop->takeOrder('Espresso', 1);
        $shop->takeOrder('Frappe', 897);
        $shop->takeOrder('Cappuccino', 97);
        $shop->takeOrder('Frappe', 3);
        $shop->takeOrder('Espresso', 3);
        $shop->takeOrder('Cappuccino', 3);
        $shop->takeOrder('Espresso', 96);
        $shop->takeOrder('Frappe', 552);
        $shop->takeOrder('Cappuccino', 121);
        $shop->takeOrder('Espresso', 121);

        foreach ($shop->service() as $service) {
            echo $service."\n";
        }

        echo $shop->report();
    }
}
