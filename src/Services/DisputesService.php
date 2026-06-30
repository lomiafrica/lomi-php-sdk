<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (DisputesService)
 */
class DisputesService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Obtenir un litige
     */
    public function get(string $id): array
    {
        $path = '/disputes/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Lister les litiges
     */
    public function list(?array $params = null): array
    {
        $path = '/disputes';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }

}
