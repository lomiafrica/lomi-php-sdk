<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (UsageSubscriptionsService)
 */
class UsageSubscriptionsService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Create a usage subscription
     */
    public function create(): array
    {
        $path = '/usage-subscriptions';

        return $this->client->request('POST', $path);
    }

}
