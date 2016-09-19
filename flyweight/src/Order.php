<?php

declare(strict_types = 1);

namespace Acme\Acme;

class Order
{
    private $table;

    private $flavour;

    public function __construct(int $table, CoffeeFlavour $flavor)
    {
        $this->table = $table;
        $this->flavour = $flavor;
    }
    
    public function serve(): string
    {
        return sprintf('Serving %s to table %d',  $this->flavour, $this->table);
    }
}
