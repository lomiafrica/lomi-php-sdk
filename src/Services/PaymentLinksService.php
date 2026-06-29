<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (PaymentLinksService)
 */
class PaymentLinksService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Créer un lien de paiement
     */
    public function create(?array $body = null): array
    {
        $path = '/payment-links';

        return $this->client->request('POST', $path, ['json' => $body]);
    }


    /**
     * Obtenir un lien de paiement par ID
     */
    public function get(string $id): array
    {
        $path = '/payment-links/{id}';
        $path = str_replace('{id}', rawurlencode($id), $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Lister les liens de paiement
     */
    public function list(?array $params = null): array
    {
        $path = '/payment-links';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }

}
