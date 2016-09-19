<?php

namespace Acme\Acme\Tests;

use Acme\Acme\DemoOfClientState;

class DemoOfClientStateTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldReturn()
    {
        $demo = new DemoOfClientState();
        $this->assertEquals(['monday', 'TUESDAY', 'WEDNESDAY', 'thuersday', 'FRIDAY', 'SATURDAY', 'sunday'], $demo());
    }
}