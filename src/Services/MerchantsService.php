<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (MerchantsService)
 */
class MerchantsService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Get merchant details
     */
    public function get(string $id): array
    {
        $path = '/merchants/{id}';
        $path = str_replace('{id}', rawurlencode($id), $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Get merchant ARR
     */
    public function getArr(string $id): array
    {
        $path = '/merchants/{id}/arr';
        $path = str_replace('{id}', rawurlencode($id), $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Get merchant account balance for a currency
     */
    public function getBalance(string $id, ?array $params = null): array
    {
        $path = '/merchants/{id}/balance';
        $path = str_replace('{id}', rawurlencode($id), $path);

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }


    /**
     * Get merchant MRR
     */
    public function getMrr(string $id): array
    {
        $path = '/merchants/{id}/mrr';
        $path = str_replace('{id}', rawurlencode($id), $path);

        return $this->client->request('GET', $path);
    }

}
