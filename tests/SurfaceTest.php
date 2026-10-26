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

    public function testWebhookSignature(): void
    {
        $secret = 'whsec';
        $payload = '{"type":"payment.completed"}';
        $signature = hash_hmac('sha256', $payload, $secret);
        $client = new LomiClient('test');

        $this->assertTrue($client->webhooks->verifySignature($payload, $signature, $secret));
        $this->assertTrue($client->webhooks->verifySignature($payload, 'sha256=' . $signature, $secret));
        $this->assertFalse($client->webhooks->verifySignature($payload, 'nope', $secret));
        $this->assertFalse($client->webhooks->verifySignature($payload, $signature, ''));
    }
}
