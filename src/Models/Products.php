<?php
/**
 * Products Model
 * AUTO-GENERATED - Do not edit manually
 */

namespace Lomi\Models;

class Products
{
    public ?float $chargeDay;
    public ?bool $continueSellingWhenOutOfStock;
    public string $createdAt;
    public ?string $createdBy;
    public ?string $description;
    public bool $displayOnStorefront;
    public string $environment;
    public ?array $images;
    public ?float $inventoryQuantity;
    public bool $isActive;
    public ?array $metadata;
    public string $name;
    public string $organizationId;
    public string $productId;
    public string $productType;
    public ?string $sku;
    public ?bool $trackInventory;
    public bool $trialEnabled;
    public ?float $trialPeriodDays;
    public string $updatedAt;
    public ?string $usageUnit;

    public function __construct(array $data = [])
    {
        $this->chargeDay = $data['charge_day'] ?? null;
        $this->continueSellingWhenOutOfStock = $data['continue_selling_when_out_of_stock'] ?? null;
        $this->createdAt = $data['created_at'] ?? null;
        $this->createdBy = $data['created_by'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->displayOnStorefront = $data['display_on_storefront'] ?? null;
        $this->environment = $data['environment'] ?? null;
        $this->images = $data['images'] ?? null;
        $this->inventoryQuantity = $data['inventory_quantity'] ?? null;
        $this->isActive = $data['is_active'] ?? null;
        $this->metadata = $data['metadata'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->organizationId = $data['organization_id'] ?? null;
        $this->productId = $data['product_id'] ?? null;
        $this->productType = $data['product_type'] ?? null;
        $this->sku = $data['sku'] ?? null;
        $this->trackInventory = $data['track_inventory'] ?? null;
        $this->trialEnabled = $data['trial_enabled'] ?? null;
        $this->trialPeriodDays = $data['trial_period_days'] ?? null;
        $this->updatedAt = $data['updated_at'] ?? null;
        $this->usageUnit = $data['usage_unit'] ?? null;
    }
}
