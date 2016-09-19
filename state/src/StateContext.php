<?php

declare(strict_types = 1);

namespace Acme\Acme;

final class StateContext
{
    private $state;
    
    public function __construct()
    {
        $this->setState(new StateLowerCase());
    }
    
    public function setState(StateLike $state)
    {
        $this->state = $state;
    }
    
    public function writeName(string $name): string
    {
        return $this->state->writeName($this, $name);
    }
}