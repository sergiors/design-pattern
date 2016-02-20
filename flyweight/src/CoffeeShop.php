<?php

declare(strict_types = 1);

namespace Acme\Acme;

use SplObjectStorage;
use Iterator;

class CoffeeShop
{
    private $orders;
    private $menu;

    public function __construct()
    {
        $this->orders = new SplObjectStorage();
        $this->menu = new Menu();
    }

    public function takeOrder(string $flavourName, int $table)
    {
        $flavour = $this->menu->lookup($flavourName);
        $order = new Order($table, $flavour);
        $this->orders->attach($order);
    }

    public function service(): Iterator
    {
        foreach ($this->orders as $order) {
            yield $order->serve();
        }
    }

    public function report(): string
    {
        return sprintf('Total CoffeeFlavour objects made: %d', $this->menu->totalCoffeeFlavoursMade());
    }
}
