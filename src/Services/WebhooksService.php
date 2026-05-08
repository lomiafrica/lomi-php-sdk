<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (WebhooksService)
 */
class WebhooksService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Obtenir un webhook par ID
     */
    public function get(string $id): array
    {
        $path = '/webhooks/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Lister les webhooks
     */
    public function list(): array
    {
        $path = '/webhooks';

        return $this->client->request('GET', $path);
    }


    /**
     * Mettre à jour un webhook
     */
    public function update(string $id, ?array $body = null): array
    {
        $path = '/webhooks/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('PATCH', $path, ['json' => $body]);
    }

}
