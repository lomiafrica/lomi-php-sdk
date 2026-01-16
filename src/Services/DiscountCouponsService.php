<?php

namespace Lomi\Services;

use Lomi\LomiClient;
use Lomi\Models\DiscountCoupons;

class DiscountCouponsService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    
    /**
     * List discount_coupons
     * @return \Lomi\Models\DiscountCoupons[]
     */
    public function list(array $params = []): array
    {
        $response = $this->client->request('GET', '/discount-coupons', [
            'query' => $params
        ]);
        
        return array_map(function ($item) {
            return new \Lomi\Models\DiscountCoupons($item);
        }, $response);
    }
    
    
    /**
     * Get a single discount_coupons
     */
    public function get(string $id): \Lomi\Models\DiscountCoupons
    {
        $response = $this->client->request('GET', "/discount-coupons/{$id}");
        return new \Lomi\Models\DiscountCoupons($response);
    }

    
    /**
     * Create a new discount_coupons
     */
    public function create(array $data): \Lomi\Models\DiscountCoupons
    {
        $response = $this->client->request('POST', "/discount-coupons", [
            'json' => $data
        ]);
        return new \Lomi\Models\DiscountCoupons($response);
    }
    
    

}
