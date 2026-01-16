<?php

namespace Lomi\Services;

use Lomi\LomiClient;
use Lomi\Models\Payouts;

class PayoutsService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    
    /**
     * List payouts
     * @return \Lomi\Models\Payouts[]
     */
    public function list(array $params = []): array
    {
        $response = $this->client->request('GET', '/payouts', [
            'query' => $params
        ]);
        
        return array_map(function ($item) {
            return new \Lomi\Models\Payouts($item);
        }, $response);
    }
    
    
    /**
     * Get a single payouts
     */
    public function get(string $id): \Lomi\Models\Payouts
    {
        $response = $this->client->request('GET', "/payouts/{$id}");
        return new \Lomi\Models\Payouts($response);
    }

    
    /**
     * Create a new payouts
     */
    public function create(array $data): \Lomi\Models\Payouts
    {
        $response = $this->client->request('POST', "/payouts", [
            'json' => $data
        ]);
        return new \Lomi\Models\Payouts($response);
    }
    
    

}
