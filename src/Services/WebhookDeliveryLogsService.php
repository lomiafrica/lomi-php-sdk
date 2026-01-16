<?php

namespace Lomi\Services;

use Lomi\LomiClient;
use Lomi\Models\WebhookDeliveryLogs;

class WebhookDeliveryLogsService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    
    /**
     * List webhook_delivery_logs
     * @return \Lomi\Models\WebhookDeliveryLogs[]
     */
    public function list(array $params = []): array
    {
        $response = $this->client->request('GET', '/webhook-delivery-logs', [
            'query' => $params
        ]);
        
        return array_map(function ($item) {
            return new \Lomi\Models\WebhookDeliveryLogs($item);
        }, $response);
    }
    
    
    /**
     * Get a single webhook_delivery_logs
     */
    public function get(string $id): \Lomi\Models\WebhookDeliveryLogs
    {
        $response = $this->client->request('GET', "/webhook-delivery-logs/{$id}");
        return new \Lomi\Models\WebhookDeliveryLogs($response);
    }

    
    
    

}
