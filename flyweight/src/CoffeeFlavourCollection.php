<?php

declare(strict_types = 1);

namespace Acme\Acme;

class CoffeeFlavourCollection implements \ArrayAccess, \Countable
{
    private $flavours = [];

    public function contains($flavorName): bool
    {
        return $this->offsetExists($flavorName);
    }
    
    public function offsetExists($offset): bool
    {
        return isset($this->flavours[$offset]);
    }

    public function offsetGet($offset): CoffeeFlavour
    {
        if ($this->offsetExists($offset)) {
            return $this->flavours[$offset];
        }

        throw new \InvalidArgumentException();
    }

    public function offsetSet($offset, $value)
    {
        if (!$value instanceof CoffeeFlavour) {
            throw new \UnexpectedValueException();
        }
        
        $this->flavours[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        if ($this->offsetExists($offset)) {
            unset($this->flavours[$offset]);
        }
    }

    public function count(): int
    {
        return count($this->flavours);
    }
}
