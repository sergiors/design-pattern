<?php

declare(strict_types = 1);

namespace Acme\Acme;

class CoffeeFlavour
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __toString(): string
    {
        return $this->name;
    }
}
