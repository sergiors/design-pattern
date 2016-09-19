<?php

namespace Acme\Acme;

final class DemoOfClientState
{
    public function __invoke(): array
    {
        $context = new StateContext();
        
        return [
            $context->writeName('Monday'),
            $context->writeName('Tuesday'),
            $context->writeName('Wednesday'),
            $context->writeName('Thuersday'),
            $context->writeName('Friday'),
            $context->writeName('Saturday'),
            $context->writeName('Sunday'),
        ];
    }
}