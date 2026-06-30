<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (TransactionsService)
 */
class TransactionsService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Obtenir une transaction par ID
     */
    public function get(string $id): array
    {
        $path = '/transactions/{id}';
        $path = str_replace('{id}', rawurlencode($id), $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Lister les transactions
     */
    public function list(?array $params = null): array
    {
        $path = '/transactions';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }

}
