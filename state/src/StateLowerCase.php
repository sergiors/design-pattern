<?php

namespace Acme\Acme;

final class StateLowerCase implements StateLike
{
    public function writeName(StateContext $context, string $name): string
    {
        $context->setState(new StateMultipleUpperCase());
        return strtolower($name);
    }
}