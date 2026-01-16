<?php

namespace Lomi\Services;

use Lomi\LomiClient;
use Lomi\Models\CheckoutSessions;

class CheckoutSessionsService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    
    /**
     * List checkout_sessions
     * @return \Lomi\Models\CheckoutSessions[]
     */
    public function list(array $params = []): array
    {
        $response = $this->client->request('GET', '/checkout-sessions', [
            'query' => $params
        ]);
        
        return array_map(function ($item) {
            return new \Lomi\Models\CheckoutSessions($item);
        }, $response);
    }
    
    
    /**
     * Get a single checkout_sessions
     */
    public function get(string $id): \Lomi\Models\CheckoutSessions
    {
        $response = $this->client->request('GET', "/checkout-sessions/{$id}");
        return new \Lomi\Models\CheckoutSessions($response);
    }

    
    /**
     * Create a new checkout_sessions
     */
    public function create(array $data): \Lomi\Models\CheckoutSessions
    {
        $response = $this->client->request('POST', "/checkout-sessions", [
            'json' => $data
        ]);
        return new \Lomi\Models\CheckoutSessions($response);
    }
    
    

}
