<?php

namespace Lomi\Services;

use Lomi\LomiClient;
use Lomi\Models\Webhooks;

class WebhooksService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    
    /**
     * List webhooks
     * @return \Lomi\Models\Webhooks[]
     */
    public function list(array $params = []): array
    {
        $response = $this->client->request('GET', '/webhooks', [
            'query' => $params
        ]);
        
        return array_map(function ($item) {
            return new \Lomi\Models\Webhooks($item);
        }, $response);
    }
    
    
    /**
     * Get a single webhooks
     */
    public function get(string $id): \Lomi\Models\Webhooks
    {
        $response = $this->client->request('GET', "/webhooks/{$id}");
        return new \Lomi\Models\Webhooks($response);
    }

    
    
    
    /**
     * Update a webhooks
     */
    public function update(string $id, array $data): \Lomi\Models\Webhooks
    {
        $response = $this->client->request('PATCH', "/webhooks/{$id}", [
            'json' => $data
        ]);
        return new \Lomi\Models\Webhooks($response);
    }

}
