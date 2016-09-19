<?php

namespace Acme\Acme;

final class StateMultipleUpperCase implements StateLike
{
    private $count = 0;
    
    public function writeName(StateContext $context, string $name): string
    {
        if (++$this->count > 1) {
            $context->setState(new StateLowerCase());
        }
        
        return strtoupper($name);
    }
}