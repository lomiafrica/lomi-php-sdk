<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (ChargesService)
 */
class ChargesService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Annuler un encaissement carte
     */
    public function cancelCardCharge(string $id): array
    {
        $path = '/charge/card/{id}/cancel';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('POST', $path);
    }


    /**
     * Créer un encaissement carte (client_secret)
     */
    public function createCardCharge(?array $body = null): array
    {
        $path = '/charge/card';

        return $this->client->request('POST', $path, ['json' => $body]);
    }


    /**
     * Lancer un encaissement direct MTN MoMo
     */
    public function createMtnCharge(): array
    {
        $path = '/charge/mtn';

        return $this->client->request('POST', $path);
    }


    /**
     * Lancer un encaissement direct Wave
     */
    public function createWaveCharge(): array
    {
        $path = '/charge/wave';

        return $this->client->request('POST', $path);
    }


    /**
     * Obtenir un encaissement carte
     */
    public function getCardCharge(string $id): array
    {
        $path = '/charge/card/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('GET', $path);
    }

}
