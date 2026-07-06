<?php

namespace Lomi\Tests;

use Lomi\WebhookVerify;
use PHPUnit\Framework\TestCase;

class WebhookVerifyTest extends TestCase
{
    public function testVerifySignatureWithKnownPayload(): void
    {
        $payload = '{"event":"payment.succeeded"}';
        $secret = 'whsec_test_secret';
        $signature = hash_hmac('sha256', $payload, $secret);

        $this->assertTrue(WebhookVerify::verify($payload, $signature, $secret));
    }

    public function testVerifySignatureAcceptsSha256Prefix(): void
    {
        $payload = '{"event":"payment.succeeded"}';
        $secret = 'whsec_test_secret';
        $signature = 'sha256=' . hash_hmac('sha256', $payload, $secret);

        $this->assertTrue(WebhookVerify::verify($payload, $signature, $secret));
    }

    public function testVerifySignatureRejectsInvalidSignature(): void
    {
        $payload = '{"event":"payment.succeeded"}';
        $this->assertFalse(WebhookVerify::verify($payload, 'deadbeef', 'secret'));
    }
}
