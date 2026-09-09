<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (ApiKeysService)
 */
class ApiKeysService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Créer une clé API
     */
    public function create(?array $body = null): array
    {
        $path = '/api-keys';

        return $this->client->request('POST', $path, ['json' => $body]);
    }


    /**
     * List API keys
     */
    public function list(): array
    {
        $path = '/api-keys';

        return $this->client->request('GET', $path);
    }


    /**
     * Révoquer une clé API
     */
    public function revoke(string $id): array
    {
        $path = '/api-keys/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('DELETE', $path);
    }

}
