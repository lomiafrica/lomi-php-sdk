<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (RefundsService)
 */
class RefundsService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Créer un remboursement
     */
    public function create(?array $body = null): array
    {
        $path = '/refunds';

        return $this->client->request('POST', $path, ['json' => $body]);
    }


    /**
     * Obtenir un remboursement
     */
    public function get(string $id): array
    {
        $path = '/refunds/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Lister les remboursements
     */
    public function list(?array $params = null): array
    {
        $path = '/refunds';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }

}
