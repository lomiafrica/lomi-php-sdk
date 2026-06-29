<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (CheckoutSessionsService)
 */
class CheckoutSessionsService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Créer une session de paiement
     */
    public function create(?array $body = null): array
    {
        $path = '/checkout-sessions';

        return $this->client->request('POST', $path, ['json' => $body]);
    }


    /**
     * Obtenir une session de paiement par ID
     */
    public function get(string $id): array
    {
        $path = '/checkout-sessions/{id}';
        $path = str_replace('{id}', rawurlencode($id), $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Lister les sessions de paiement
     */
    public function list(?array $params = null): array
    {
        $path = '/checkout-sessions';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }

}
