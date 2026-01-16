<?php

namespace Lomi\Tests;

use Lomi\LomiClient;
use PHPUnit\Framework\TestCase;

class RefundsTest extends TestCase
{
    public function testServiceInitialization()
    {
        $client = new LomiClient('test_key');
        $this->assertNotNull($client->refunds);
    }
}
