<?php

declare(strict_types = 1);

namespace Acme\Acme;

class Order
{
    private $tableNumber;
    private $flavour;

    public function __construct(int $tableNumber, CoffeeFlavour $flavor)
    {
        $this->tableNumber = $tableNumber;
        $this->flavour = $flavor;
    }

    public function serve(): string
    {
        return sprintf('Serving %s to table %d',  $this->flavour, $this->tableNumber);
    }
}
