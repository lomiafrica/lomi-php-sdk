<?php
/**
 * DiscountCoupons Model
 * AUTO-GENERATED - Do not edit manually
 */

namespace Lomi\Models;

class DiscountCoupons
{
    public string $code;
    public string $couponId;
    public string $createdAt;
    public float $currentUses;
    public string $customerType;
    public ?string $description;
    public ?float $discountFixedAmount;
    public ?float $discountPercentage;
    public string $discountType;
    public string $environment;
    public ?string $expiresAt;
    public bool $isActive;
    public ?float $maxQuantityPerUse;
    public ?float $maxUses;
    public string $organizationId;
    public string $scopeType;
    public string $updatedAt;
    public string $usageFrequencyLimit;
    public ?float $usageLimitValue;
    public ?string $validFrom;

    public function __construct(array $data = [])
    {
        $this->code = $data['code'] ?? null;
        $this->couponId = $data['coupon_id'] ?? null;
        $this->createdAt = $data['created_at'] ?? null;
        $this->currentUses = $data['current_uses'] ?? null;
        $this->customerType = $data['customer_type'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->discountFixedAmount = $data['discount_fixed_amount'] ?? null;
        $this->discountPercentage = $data['discount_percentage'] ?? null;
        $this->discountType = $data['discount_type'] ?? null;
        $this->environment = $data['environment'] ?? null;
        $this->expiresAt = $data['expires_at'] ?? null;
        $this->isActive = $data['is_active'] ?? null;
        $this->maxQuantityPerUse = $data['max_quantity_per_use'] ?? null;
        $this->maxUses = $data['max_uses'] ?? null;
        $this->organizationId = $data['organization_id'] ?? null;
        $this->scopeType = $data['scope_type'] ?? null;
        $this->updatedAt = $data['updated_at'] ?? null;
        $this->usageFrequencyLimit = $data['usage_frequency_limit'] ?? null;
        $this->usageLimitValue = $data['usage_limit_value'] ?? null;
        $this->validFrom = $data['valid_from'] ?? null;
    }
}
