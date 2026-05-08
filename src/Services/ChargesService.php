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
     * Lancer un encaissement direct Wave
     */
    public function createWaveCharge(): array
    {
        $path = '/charge/wave';

        return $this->client->request('POST', $path);
    }

}
