<?php

namespace Lomi\Services;

use Lomi\LomiClient;
use Lomi\Models\Subscriptions;

class SubscriptionsService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    
    /**
     * List subscriptions
     * @return \Lomi\Models\Subscriptions[]
     */
    public function list(array $params = []): array
    {
        $response = $this->client->request('GET', '/subscriptions', [
            'query' => $params
        ]);
        
        return array_map(function ($item) {
            return new \Lomi\Models\Subscriptions($item);
        }, $response);
    }
    
    
    /**
     * Get a single subscriptions
     */
    public function get(string $id): \Lomi\Models\Subscriptions
    {
        $response = $this->client->request('GET', "/subscriptions/{$id}");
        return new \Lomi\Models\Subscriptions($response);
    }

    
    
    
    /**
     * Update a subscriptions
     */
    public function update(string $id, array $data): \Lomi\Models\Subscriptions
    {
        $response = $this->client->request('PATCH', "/subscriptions/{$id}", [
            'json' => $data
        ]);
        return new \Lomi\Models\Subscriptions($response);
    }

}
