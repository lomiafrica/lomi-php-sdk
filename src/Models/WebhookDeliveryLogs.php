<?php
/**
 * WebhookDeliveryLogs Model
 * AUTO-GENERATED - Do not edit manually
 */

namespace Lomi\Models;

class WebhookDeliveryLogs
{
    public ?float $amount;
    public float $attemptNumber;
    public ?string $comptePaye;
    public ?string $comptePayeur;
    public string $createdAt;
    public string $eventType;
    public ?array $headers;
    public ?string $ipAddress;
    public string $logId;
    public string $organizationId;
    public array $payload;
    public ?float $requestDurationMs;
    public ?string $responseBody;
    public ?float $responseStatus;
    public ?string $spiTxId;
    public bool $success;
    public ?string $userAgent;
    public string $webhookId;

    public function __construct(array $data = [])
    {
        $this->amount = $data['amount'] ?? null;
        $this->attemptNumber = $data['attempt_number'] ?? null;
        $this->comptePaye = $data['compte_paye'] ?? null;
        $this->comptePayeur = $data['compte_payeur'] ?? null;
        $this->createdAt = $data['created_at'] ?? null;
        $this->eventType = $data['event_type'] ?? null;
        $this->headers = $data['headers'] ?? null;
        $this->ipAddress = $data['ip_address'] ?? null;
        $this->logId = $data['log_id'] ?? null;
        $this->organizationId = $data['organization_id'] ?? null;
        $this->payload = $data['payload'] ?? null;
        $this->requestDurationMs = $data['request_duration_ms'] ?? null;
        $this->responseBody = $data['response_body'] ?? null;
        $this->responseStatus = $data['response_status'] ?? null;
        $this->spiTxId = $data['spi_tx_id'] ?? null;
        $this->success = $data['success'] ?? null;
        $this->userAgent = $data['user_agent'] ?? null;
        $this->webhookId = $data['webhook_id'] ?? null;
    }
}
