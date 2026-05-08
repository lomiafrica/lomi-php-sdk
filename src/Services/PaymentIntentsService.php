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
     * Créer un Payment Intent carte (client_secret)
     */
    public function create(?array $body = null): array
    {
        $path = '/payment-intents';

        return $this->client->request('POST', $path, ['json' => $body]);
    }

}
