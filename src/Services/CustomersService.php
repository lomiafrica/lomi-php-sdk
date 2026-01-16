<?php

namespace Lomi\Services;

use Lomi\LomiClient;
use Lomi\Models\Customers;

class CustomersService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    
    /**
     * List customers
     * @return \Lomi\Models\Customers[]
     */
    public function list(array $params = []): array
    {
        $response = $this->client->request('GET', '/customers', [
            'query' => $params
        ]);
        
        return array_map(function ($item) {
            return new \Lomi\Models\Customers($item);
        }, $response);
    }
    
    
    /**
     * Get a single customers
     */
    public function get(string $id): \Lomi\Models\Customers
    {
        $response = $this->client->request('GET', "/customers/{$id}");
        return new \Lomi\Models\Customers($response);
    }

    
    /**
     * Create a new customers
     */
    public function create(array $data): \Lomi\Models\Customers
    {
        $response = $this->client->request('POST', "/customers", [
            'json' => $data
        ]);
        return new \Lomi\Models\Customers($response);
    }
    
    
    /**
     * Update a customers
     */
    public function update(string $id, array $data): \Lomi\Models\Customers
    {
        $response = $this->client->request('PATCH', "/customers/{$id}", [
            'json' => $data
        ]);
        return new \Lomi\Models\Customers($response);
    }

}
