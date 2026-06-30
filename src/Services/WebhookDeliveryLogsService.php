<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (WebhookDeliveryLogsService)
 */
class WebhookDeliveryLogsService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Obtenir un journal de livraison par ID
     */
    public function get(string $id): array
    {
        $path = '/webhook-delivery-logs/{id}';
        $path = str_replace('{id}', rawurlencode($id), $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Lister les journaux de livraison
     */
    public function list(?array $params = null): array
    {
        $path = '/webhook-delivery-logs';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }

}
