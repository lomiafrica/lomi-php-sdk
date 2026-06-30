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
     * Cancel card charge
     */
    public function cancelCardCharge(string $id): array
    {
        $path = '/charge/card/{id}/cancel';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('POST', $path);
    }


    /**
     * Create card charge (client_secret)
     */
    public function createCardCharge(?array $body = null): array
    {
        $path = '/charge/card';

        return $this->client->request('POST', $path, ['json' => $body]);
    }


    /**
     * Create MTN MoMo charge
     */
    public function createMtnCharge(?array $body = null): array
    {
        $path = '/charge/mtn';

        return $this->client->request('POST', $path, ['json' => $body]);
    }


    /**
     * Create Switch charge (server-side card authorization)
     */
    public function createSwitchCharge(?array $body = null): array
    {
        $path = '/charge/switch';

        return $this->client->request('POST', $path, ['json' => $body]);
    }


    /**
     * Create direct Wave charge
     */
    public function createWaveCharge(?array $body = null): array
    {
        $path = '/charge/wave';

        return $this->client->request('POST', $path, ['json' => $body]);
    }


    /**
     * Retrieve card charge
     */
    public function getCardCharge(string $id): array
    {
        $path = '/charge/card/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('GET', $path);
    }

}
