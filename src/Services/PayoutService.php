<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (PayoutService)
 */
class PayoutService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Lancer un virement SPI
     */
    public function createSpiPayout(): array
    {
        $path = '/payout/spi';

        return $this->client->request('POST', $path);
    }

}
