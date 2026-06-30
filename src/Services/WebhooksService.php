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
     * Créer un webhook
     */
    public function create(): array
    {
        $path = '/webhooks';

        return $this->client->request('POST', $path);
    }


    /**
     * Supprimer un webhook
     */
    public function delete(string $id): array
    {
        $path = '/webhooks/{id}';
        $path = str_replace('{id}', rawurlencode($id), $path);

        return $this->client->request('DELETE', $path);
    }


    /**
     * Obtenir un webhook par ID
     */
    public function get(string $id): array
    {
        $path = '/webhooks/{id}';
        $path = str_replace('{id}', rawurlencode($id), $path);

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
     * Relancer une livraison webhook
     */
    public function retryDelivery(string $webhookId, string $logId): array
    {
        $path = '/webhooks/{webhookId}/logs/{logId}/retry';
        $path = str_replace('{webhookId}', rawurlencode($webhookId), $path);
        $path = str_replace('{logId}', rawurlencode($logId), $path);

        return $this->client->request('POST', $path);
    }


    /**
     * Envoyer un événement test au webhook
     */
    public function test(string $id): array
    {
        $path = '/webhooks/{id}/test';
        $path = str_replace('{id}', rawurlencode($id), $path);

        return $this->client->request('POST', $path);
    }


    /**
     * Mettre à jour un webhook
     */
    public function update(string $id, ?array $body = null): array
    {
        $path = '/webhooks/{id}';
        $path = str_replace('{id}', rawurlencode($id), $path);

        return $this->client->request('PATCH', $path, ['json' => $body]);
    }

}
