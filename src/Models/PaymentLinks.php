<?php
/**
 * PaymentLinks Model
 * AUTO-GENERATED - Do not edit manually
 */

namespace Lomi\Models;

class PaymentLinks
{
    public bool $allowCouponCode;
    public bool $allowQuantity;
    public ?float $amount;
    public ?string $cancelUrl;
    public string $createdAt;
    public ?string $createdBy;
    public string $currencyCode;
    public ?string $description;
    public string $environment;
    public ?string $expiresAt;
    public bool $isActive;
    public string $linkId;
    public string $linkType;
    public ?array $metadata;
    public string $organizationId;
    public ?string $priceId;
    public ?string $productId;
    public float $quantity;
    public bool $requireBillingAddress;
    public ?string $successUrl;
    public string $title;
    public string $updatedAt;
    public string $url;

    public function __construct(array $data = [])
    {
        $this->allowCouponCode = $data['allow_coupon_code'] ?? null;
        $this->allowQuantity = $data['allow_quantity'] ?? null;
        $this->amount = $data['amount'] ?? null;
        $this->cancelUrl = $data['cancel_url'] ?? null;
        $this->createdAt = $data['created_at'] ?? null;
        $this->createdBy = $data['created_by'] ?? null;
        $this->currencyCode = $data['currency_code'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->environment = $data['environment'] ?? null;
        $this->expiresAt = $data['expires_at'] ?? null;
        $this->isActive = $data['is_active'] ?? null;
        $this->linkId = $data['link_id'] ?? null;
        $this->linkType = $data['link_type'] ?? null;
        $this->metadata = $data['metadata'] ?? null;
        $this->organizationId = $data['organization_id'] ?? null;
        $this->priceId = $data['price_id'] ?? null;
        $this->productId = $data['product_id'] ?? null;
        $this->quantity = $data['quantity'] ?? null;
        $this->requireBillingAddress = $data['require_billing_address'] ?? null;
        $this->successUrl = $data['success_url'] ?? null;
        $this->title = $data['title'] ?? null;
        $this->updatedAt = $data['updated_at'] ?? null;
        $this->url = $data['url'] ?? null;
    }
}
