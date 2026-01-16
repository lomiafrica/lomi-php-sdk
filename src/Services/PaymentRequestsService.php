<?php

namespace Lomi\Services;

use Lomi\LomiClient;
use Lomi\Models\PaymentRequests;

class PaymentRequestsService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    
    /**
     * List payment_requests
     * @return \Lomi\Models\PaymentRequests[]
     */
    public function list(array $params = []): array
    {
        $response = $this->client->request('GET', '/payment-requests', [
            'query' => $params
        ]);
        
        return array_map(function ($item) {
            return new \Lomi\Models\PaymentRequests($item);
        }, $response);
    }
    
    
    /**
     * Get a single payment_requests
     */
    public function get(string $id): \Lomi\Models\PaymentRequests
    {
        $response = $this->client->request('GET', "/payment-requests/{$id}");
        return new \Lomi\Models\PaymentRequests($response);
    }

    
    /**
     * Create a new payment_requests
     */
    public function create(array $data): \Lomi\Models\PaymentRequests
    {
        $response = $this->client->request('POST', "/payment-requests", [
            'json' => $data
        ]);
        return new \Lomi\Models\PaymentRequests($response);
    }
    
    

}
