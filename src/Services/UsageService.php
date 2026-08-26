<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (UsageService)
 */
class UsageService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Check if a customer has an active entitlement
     */
    public function checkEntitlement(?array $params = null): array
    {
        $path = '/usage/entitlements';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }


    /**
     * Record a usage event
     */
    public function create(): array
    {
        $path = '/usage/events';

        return $this->client->request('POST', $path);
    }


    /**
     * Create or update a plan entitlement feature
     */
    public function createEntitlement(): array
    {
        $path = '/usage/entitlements';

        return $this->client->request('POST', $path);
    }


    /**
     * Create a usage subscription
     */
    public function createSubscription(): array
    {
        $path = '/usage/subscriptions';

        return $this->client->request('POST', $path);
    }


    /**
     * Get a usage event
     */
    public function get(string $id): array
    {
        $path = '/usage/events/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Combined MRR + usage + one-time revenue metrics
     */
    public function getRevenue(?array $params = null): array
    {
        $path = '/usage/revenue';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }


    /**
     * Credit prepaid usage units to a customer meter wallet
     */
    public function grantCredits(): array
    {
        $path = '/usage/credits';

        return $this->client->request('POST', $path);
    }


    /**
     * List usage events
     */
    public function list(?array $params = null): array
    {
        $path = '/usage/events';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }


    /**
     * List usage billing periods
     */
    public function listPeriods(?array $params = null): array
    {
        $path = '/usage/periods';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }

}
