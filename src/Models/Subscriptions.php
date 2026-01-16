<?php
/**
 * Subscriptions Model
 * AUTO-GENERATED - Do not edit manually
 */

namespace Lomi\Models;

class Subscriptions
{
    public string $createdAt;
    public ?string $createdBy;
    public string $customerId;
    public ?string $endDate;
    public string $environment;
    public ?array $metadata;
    public ?string $nextBillingDate;
    public string $organizationId;
    public ?string $priceId;
    public string $productId;
    public ?string $providerPaymentMethodId;
    public string $startDate;
    public string $status;
    public string $subscriptionId;
    public string $updatedAt;

    public function __construct(array $data = [])
    {
        $this->createdAt = $data['created_at'] ?? null;
        $this->createdBy = $data['created_by'] ?? null;
        $this->customerId = $data['customer_id'] ?? null;
        $this->endDate = $data['end_date'] ?? null;
        $this->environment = $data['environment'] ?? null;
        $this->metadata = $data['metadata'] ?? null;
        $this->nextBillingDate = $data['next_billing_date'] ?? null;
        $this->organizationId = $data['organization_id'] ?? null;
        $this->priceId = $data['price_id'] ?? null;
        $this->productId = $data['product_id'] ?? null;
        $this->providerPaymentMethodId = $data['provider_payment_method_id'] ?? null;
        $this->startDate = $data['start_date'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->subscriptionId = $data['subscription_id'] ?? null;
        $this->updatedAt = $data['updated_at'] ?? null;
    }
}
