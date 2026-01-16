<?php

namespace Lomi\Services;

use Lomi\LomiClient;
use Lomi\Models\Accounts;

class AccountsService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    
    /**
     * List accounts
     * @return \Lomi\Models\Accounts[]
     */
    public function list(array $params = []): array
    {
        $response = $this->client->request('GET', '/accounts', [
            'query' => $params
        ]);
        
        return array_map(function ($item) {
            return new \Lomi\Models\Accounts($item);
        }, $response);
    }
    
    
    /**
     * Get a single accounts
     */
    public function get(string $id): \Lomi\Models\Accounts
    {
        $response = $this->client->request('GET', "/accounts/{$id}");
        return new \Lomi\Models\Accounts($response);
    }

    
    
    

}
