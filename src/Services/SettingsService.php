<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (SettingsService)
 */
class SettingsService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Lire les réglages checkout
     */
    public function getCheckout(): array
    {
        $path = '/settings/checkout';

        return $this->client->request('GET', $path);
    }


    /**
     * Lire la vitrine
     */
    public function getStorefront(): array
    {
        $path = '/settings/storefront';

        return $this->client->request('GET', $path);
    }


    /**
     * Mettre à jour les réglages checkout
     */
    public function updateCheckout(?array $body = null): array
    {
        $path = '/settings/checkout';

        return $this->client->request('PATCH', $path, ['json' => $body]);
    }


    /**
     * Mettre à jour la vitrine
     */
    public function updateStorefront(?array $body = null): array
    {
        $path = '/settings/storefront';

        return $this->client->request('PATCH', $path, ['json' => $body]);
    }

}
