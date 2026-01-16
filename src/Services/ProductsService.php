<?php

namespace Lomi\Services;

use Lomi\LomiClient;
use Lomi\Models\Products;

class ProductsService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    
    /**
     * List products
     * @return \Lomi\Models\Products[]
     */
    public function list(array $params = []): array
    {
        $response = $this->client->request('GET', '/products', [
            'query' => $params
        ]);
        
        return array_map(function ($item) {
            return new \Lomi\Models\Products($item);
        }, $response);
    }
    
    
    /**
     * Get a single products
     */
    public function get(string $id): \Lomi\Models\Products
    {
        $response = $this->client->request('GET', "/products/{$id}");
        return new \Lomi\Models\Products($response);
    }

    
    /**
     * Create a new products
     */
    public function create(array $data): \Lomi\Models\Products
    {
        $response = $this->client->request('POST', "/products", [
            'json' => $data
        ]);
        return new \Lomi\Models\Products($response);
    }
    
    

}
