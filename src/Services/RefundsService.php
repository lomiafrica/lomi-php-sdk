<?php

namespace Lomi\Services;

use Lomi\LomiClient;
use Lomi\Models\Refunds;

class RefundsService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    
    /**
     * List refunds
     * @return \Lomi\Models\Refunds[]
     */
    public function list(array $params = []): array
    {
        $response = $this->client->request('GET', '/refunds', [
            'query' => $params
        ]);
        
        return array_map(function ($item) {
            return new \Lomi\Models\Refunds($item);
        }, $response);
    }
    
    
    /**
     * Get a single refunds
     */
    public function get(string $id): \Lomi\Models\Refunds
    {
        $response = $this->client->request('GET', "/refunds/{$id}");
        return new \Lomi\Models\Refunds($response);
    }

    
    /**
     * Create a new refunds
     */
    public function create(array $data): \Lomi\Models\Refunds
    {
        $response = $this->client->request('POST', "/refunds", [
            'json' => $data
        ]);
        return new \Lomi\Models\Refunds($response);
    }
    
    

}
