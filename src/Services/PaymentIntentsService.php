<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (PaymentIntentsService)
 */
class PaymentIntentsService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Annuler un intent de paiement carte
     */
    public function cancel(string $id): array
    {
        $path = '/payment-intents/{id}/cancel';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('POST', $path);
    }


    /**
     * Créer un intent de paiement carte (client_secret)
     */
    public function create(?array $body = null): array
    {
        $path = '/payment-intents';

        return $this->client->request('POST', $path, ['json' => $body]);
    }


    /**
     * Récupérer un intent de paiement carte
     */
    public function get(string $id): array
    {
        $path = '/payment-intents/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('GET', $path);
    }

}
