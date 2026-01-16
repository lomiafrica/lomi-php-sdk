<?php

namespace Lomi\Services;

use Lomi\LomiClient;
use Lomi\Models\Transactions;

class TransactionsService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    
    /**
     * List transactions
     * @return \Lomi\Models\Transactions[]
     */
    public function list(array $params = []): array
    {
        $response = $this->client->request('GET', '/transactions', [
            'query' => $params
        ]);
        
        return array_map(function ($item) {
            return new \Lomi\Models\Transactions($item);
        }, $response);
    }
    
    
    /**
     * Get a single transactions
     */
    public function get(string $id): \Lomi\Models\Transactions
    {
        $response = $this->client->request('GET', "/transactions/{$id}");
        return new \Lomi\Models\Transactions($response);
    }

    
    
    

}
