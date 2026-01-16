<?php

namespace Lomi\Services;

use Lomi\LomiClient;
use Lomi\Models\PaymentLinks;

class PaymentLinksService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    
    /**
     * List payment_links
     * @return \Lomi\Models\PaymentLinks[]
     */
    public function list(array $params = []): array
    {
        $response = $this->client->request('GET', '/payment-links', [
            'query' => $params
        ]);
        
        return array_map(function ($item) {
            return new \Lomi\Models\PaymentLinks($item);
        }, $response);
    }
    
    
    /**
     * Get a single payment_links
     */
    public function get(string $id): \Lomi\Models\PaymentLinks
    {
        $response = $this->client->request('GET', "/payment-links/{$id}");
        return new \Lomi\Models\PaymentLinks($response);
    }

    
    /**
     * Create a new payment_links
     */
    public function create(array $data): \Lomi\Models\PaymentLinks
    {
        $response = $this->client->request('POST', "/payment-links", [
            'json' => $data
        ]);
        return new \Lomi\Models\PaymentLinks($response);
    }
    
    

}
