<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (SettlementsService)
 */
class SettlementsService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Request an instant settlement (Nitro)
     */
    public function createInstant(?array $body = null): array
    {
        $path = '/settlements/instant';

        return $this->client->request('POST', $path, ['json' => $body]);
    }


    /**
     * List settlement periods
     */
    public function findAll(?array $params = null): array
    {
        $path = '/settlements';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }


    /**
     * List transactions in a settlement period
     */
    public function findTransactions(string $id, ?array $params = null): array
    {
        $path = '/settlements/{id}/transactions';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }


    /**
     * Get an instant settlement (Nitro request)
     */
    public function getInstant(string $id): array
    {
        $path = '/settlements/instant/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('GET', $path);
    }

}
