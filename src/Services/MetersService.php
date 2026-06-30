<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (MetersService)
 */
class MetersService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Create a meter
     */
    public function create(): array
    {
        $path = '/meters';

        return $this->client->request('POST', $path);
    }


    /**
     * Get a meter
     */
    public function get(string $id): array
    {
        $path = '/meters/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Get meter balance for a customer
     */
    public function getCustomerBalance(string $id, string $customerId): array
    {
        $path = '/meters/{id}/balances/{customerId}';
        $path = str_replace('{id}', $id, $path);
        $path = str_replace('{customerId}', $customerId, $path);

        return $this->client->request('GET', $path);
    }


    /**
     * List meters
     */
    public function list(?array $params = null): array
    {
        $path = '/meters';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }


    /**
     * Update a meter
     */
    public function update(string $id): array
    {
        $path = '/meters/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('PATCH', $path);
    }

}
