<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (TransfersService)
 */
class TransfersService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Create a transfer to a Member Account
     */
    public function create(?array $body = null): array
    {
        $path = '/transfers';

        return $this->client->request('POST', $path, ['json' => $body]);
    }


    /**
     * Retrieve a transfer
     */
    public function get(string $id): array
    {
        $path = '/transfers/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('GET', $path);
    }


    /**
     * List transfers
     */
    public function list(?array $params = null): array
    {
        $path = '/transfers';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }


    /**
     * Reverse a transfer
     */
    public function reverse(string $id, ?array $body = null): array
    {
        $path = '/transfers/{id}/reversals';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('POST', $path, ['json' => $body]);
    }

}
