<?php

namespace Acme\Acme;

interface StateLike
{
    public function writeName(StateContext $context, string $name): string;
}