<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (UsageBillingService)
 */
class UsageBillingService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Check if a customer has an active entitlement
     */
    public function checkEntitlement(): array
    {
        $path = '/usage-billing/entitlements/check';

        return $this->client->request('GET', $path);
    }


    /**
     * Create or update a plan entitlement feature
     */
    public function createEntitlement(): array
    {
        $path = '/usage-billing/entitlements';

        return $this->client->request('POST', $path);
    }


    /**
     * Combined MRR + usage + one-time revenue metrics
     */
    public function getRevenue(?array $params = null): array
    {
        $path = '/usage-billing/revenue';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }


    /**
     * Get meter usage for a subscription
     */
    public function getSubscriptionUsage(string $subscriptionId): array
    {
        $path = '/usage-billing/subscriptions/{subscriptionId}/usage';
        $path = str_replace('{subscriptionId}', $subscriptionId, $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Credit prepaid usage units to a customer meter wallet
     */
    public function grantCredits(): array
    {
        $path = '/usage-billing/credits';

        return $this->client->request('POST', $path);
    }


    /**
     * List usage billing periods
     */
    public function listPeriods(?array $params = null): array
    {
        $path = '/usage-billing/periods';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }

}
