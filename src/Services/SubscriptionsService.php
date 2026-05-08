<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (SubscriptionsService)
 */
class SubscriptionsService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Résilier un abonnement
     */
    public function cancel(string $id, ?array $body = null): array
    {
        $path = '/subscriptions/{id}/cancel';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('POST', $path, ['json' => $body]);
    }


    /**
     * Abonnements d’un client
     */
    public function findByCustomer(string $customerId): array
    {
        $path = '/subscriptions/customer/{customerId}';
        $path = str_replace('{customerId}', $customerId, $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Obtenir un abonnement par ID
     */
    public function get(string $id): array
    {
        $path = '/subscriptions/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Lister les abonnements
     */
    public function list(?array $params = null): array
    {
        $path = '/subscriptions';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }

}
