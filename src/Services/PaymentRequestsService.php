<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (PaymentRequestsService)
 */
class PaymentRequestsService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Créer une demande de paiement
     */
    public function create(?array $body = null): array
    {
        $path = '/payment-requests';

        return $this->client->request('POST', $path, ['json' => $body]);
    }


    /**
     * Obtenir une demande de paiement par ID
     */
    public function get(string $id): array
    {
        $path = '/payment-requests/{id}';
        $path = str_replace('{id}', rawurlencode($id), $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Lister les demandes de paiement
     */
    public function list(?array $params = null): array
    {
        $path = '/payment-requests';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }

}
