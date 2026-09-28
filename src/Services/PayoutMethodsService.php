<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (PayoutMethodsService)
 */
class PayoutMethodsService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Add a payout method
     */
    public function create(?array $body = null): array
    {
        $path = '/payout-methods';

        return $this->client->request('POST', $path, ['json' => $body]);
    }


    /**
     * List payout methods
     */
    public function list(): array
    {
        $path = '/payout-methods';

        return $this->client->request('GET', $path);
    }

}
