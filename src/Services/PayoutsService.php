<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (PayoutsService)
 */
class PayoutsService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Créer un virement
     */
    public function create(): array
    {
        $path = '/payouts';

        return $this->client->request('POST', $path);
    }


    /**
     * Obtenir un virement
     */
    public function get(string $id): array
    {
        $path = '/payouts/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Lister les virements
     */
    public function list(?array $params = null): array
    {
        $path = '/payouts';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }

}
