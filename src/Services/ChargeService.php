<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (ChargeService)
 */
class ChargeService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Lancer un encaissement direct MTN MoMo
     */
    public function createMtnCharge(): array
    {
        $path = '/charge/mtn';

        return $this->client->request('POST', $path);
    }

}
