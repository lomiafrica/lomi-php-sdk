<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (RefundsService)
 */
class RefundsService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Lancer un remboursement Wave
     */
    public function createWaveRefund(): array
    {
        $path = '/refund/wave';

        return $this->client->request('POST', $path);
    }

}
