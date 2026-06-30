<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (CustomerSubscriptionsService)
 */
class CustomerSubscriptionsService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Cancel customer subscription
     */
    public function delete(string $subscription_id): array
    {
        $path = '/customer-subscriptions/{subscription_id}';
        $path = str_replace('{subscription_id}', $subscription_id, $path);

        return $this->client->request('DELETE', $path);
    }


    /**
     * Get customer subscription
     */
    public function get(string $subscription_id): array
    {
        $path = '/customer-subscriptions/{subscription_id}';
        $path = str_replace('{subscription_id}', $subscription_id, $path);

        return $this->client->request('GET', $path);
    }


    /**
     * List customer subscriptions
     */
    public function list(?array $params = null): array
    {
        $path = '/customer-subscriptions';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }


    /**
     * Update customer subscription
     */
    public function update(string $subscription_id): array
    {
        $path = '/customer-subscriptions/{subscription_id}';
        $path = str_replace('{subscription_id}', $subscription_id, $path);

        return $this->client->request('PATCH', $path);
    }

}
