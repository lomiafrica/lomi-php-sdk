<?php

namespace Lomi\Services;

use Lomi\LomiClient;
use Lomi\Models\Organizations;

class OrganizationsService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    
    /**
     * List organizations
     * @return \Lomi\Models\Organizations[]
     */
    public function list(array $params = []): array
    {
        $response = $this->client->request('GET', '/organizations', [
            'query' => $params
        ]);
        
        return array_map(function ($item) {
            return new \Lomi\Models\Organizations($item);
        }, $response);
    }
    
    
    /**
     * Get a single organizations
     */
    public function get(string $id): \Lomi\Models\Organizations
    {
        $response = $this->client->request('GET', "/organizations/{$id}");
        return new \Lomi\Models\Organizations($response);
    }

    
    
    

}
