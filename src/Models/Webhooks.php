<?php
/**
 * Webhooks Model
 * AUTO-GENERATED - Do not edit manually
 */

namespace Lomi\Models;

class Webhooks
{
    public string $authorizedEvents;
    public string $createdAt;
    public ?string $createdBy;
    public ?string $deletedAt;
    public string $environment;
    public bool $isActive;
    public ?array $lastPayload;
    public ?string $lastResponseBody;
    public ?float $lastResponseStatus;
    public ?string $lastTriggeredAt;
    public ?array $metadata;
    public string $organizationId;
    public ?float $retryCount;
    public ?array $spiEventTypes;
    public bool $supportsSpi;
    public string $updatedAt;
    public string $url;
    public string $verificationToken;
    public string $webhookId;

    public function __construct(array $data = [])
    {
        $this->authorizedEvents = $data['authorized_events'] ?? null;
        $this->createdAt = $data['created_at'] ?? null;
        $this->createdBy = $data['created_by'] ?? null;
        $this->deletedAt = $data['deleted_at'] ?? null;
        $this->environment = $data['environment'] ?? null;
        $this->isActive = $data['is_active'] ?? null;
        $this->lastPayload = $data['last_payload'] ?? null;
        $this->lastResponseBody = $data['last_response_body'] ?? null;
        $this->lastResponseStatus = $data['last_response_status'] ?? null;
        $this->lastTriggeredAt = $data['last_triggered_at'] ?? null;
        $this->metadata = $data['metadata'] ?? null;
        $this->organizationId = $data['organization_id'] ?? null;
        $this->retryCount = $data['retry_count'] ?? null;
        $this->spiEventTypes = $data['spi_event_types'] ?? null;
        $this->supportsSpi = $data['supports_spi'] ?? null;
        $this->updatedAt = $data['updated_at'] ?? null;
        $this->url = $data['url'] ?? null;
        $this->verificationToken = $data['verification_token'] ?? null;
        $this->webhookId = $data['webhook_id'] ?? null;
    }
}
