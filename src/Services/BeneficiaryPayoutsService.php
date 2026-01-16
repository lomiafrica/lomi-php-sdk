<?php

namespace Lomi\Services;

use Lomi\LomiClient;
use Lomi\Models\BeneficiaryPayouts;

class BeneficiaryPayoutsService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    
    /**
     * List beneficiary_payouts
     * @return \Lomi\Models\BeneficiaryPayouts[]
     */
    public function list(array $params = []): array
    {
        $response = $this->client->request('GET', '/beneficiary-payouts', [
            'query' => $params
        ]);
        
        return array_map(function ($item) {
            return new \Lomi\Models\BeneficiaryPayouts($item);
        }, $response);
    }
    
    
    /**
     * Get a single beneficiary_payouts
     */
    public function get(string $id): \Lomi\Models\BeneficiaryPayouts
    {
        $response = $this->client->request('GET', "/beneficiary-payouts/{$id}");
        return new \Lomi\Models\BeneficiaryPayouts($response);
    }

    
    /**
     * Create a new beneficiary_payouts
     */
    public function create(array $data): \Lomi\Models\BeneficiaryPayouts
    {
        $response = $this->client->request('POST', "/beneficiary-payouts", [
            'json' => $data
        ]);
        return new \Lomi\Models\BeneficiaryPayouts($response);
    }
    
    

}
