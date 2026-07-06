<?php

namespace Lomi;

/**
 * Webhook signature verification (HMAC SHA-256).
 */
final class WebhookVerify
{
    public static function verify(string $payload, string $signature, string $secret): bool
    {
        if ($signature === '' || $secret === '') {
            return false;
        }

        $normalized = $signature;
        if (str_starts_with($normalized, 'sha256=')) {
            $normalized = substr($normalized, 7);
        }

        $expected = hash_hmac('sha256', $payload, $secret);

        return hash_equals($expected, $normalized);
    }
}
