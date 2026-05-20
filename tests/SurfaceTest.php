<?php

namespace Lomi\Tests;

use Lomi\LomiClient;
use PHPUnit\Framework\TestCase;

class SurfaceTest extends TestCase
{
    public function testClientConstructs(): void
    {
        $c = new LomiClient('test');
        $this->assertInstanceOf(LomiClient::class, $c);
        $this->assertTrue(property_exists($c, 'charges'));
        $this->assertTrue(property_exists($c, 'payouts'));
    }
}
