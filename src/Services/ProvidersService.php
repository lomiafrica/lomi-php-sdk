<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (ProvidersService)
 */
class ProvidersService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * List payment providers
     */
    public function list(?array $params = null): array
    {
        $path = '/providers';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }

}
