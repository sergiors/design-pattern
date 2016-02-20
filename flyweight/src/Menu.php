<?php

declare(strict_types = 1);

namespace Acme\Acme;

class Menu
{
    private $flavours;

    public function __construct()
    {
        $this->flavours = new CoffeeFlavourCollection();
    }

    public function lookup(string $flavorName): CoffeeFlavour
    {
        if (!$this->flavours->contains($flavorName)) {
            $this->flavours[$flavorName] = new CoffeeFlavour($flavorName);
        }

        return $this->flavours[$flavorName];
    }

    public function totalCoffeeFlavoursMade(): int
    {
        return $this->flavours->count();
    }
}
