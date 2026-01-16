<?php

namespace Lomi\Tests;

use Lomi\LomiClient;
use PHPUnit\Framework\TestCase;

class LomiClientTest extends TestCase
{
    public function testInitialization()
    {
        $client = new LomiClient('test_key');
        $this->assertInstanceOf(LomiClient::class, $client);
    }
}
