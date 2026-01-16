<?php
/**
 * Organizations Model
 * AUTO-GENERATED - Do not edit manually
 */

namespace Lomi\Models;

class Organizations
{
    public float $arr;
    public string $createdAt;
    public string $defaultCurrency;
    public ?string $deletedAt;
    public string $email;
    public ?string $employeeNumber;
    public ?string $industry;
    public bool $isDeleted;
    public bool $isStarterBusiness;
    public ?string $logoUrl;
    public float $merchantLifetimeValue;
    public ?array $metadata;
    public float $mrr;
    public string $name;
    public string $organizationId;
    public string $phoneNumber;
    public ?string $pinCode;
    public ?string $slug;
    public string $status;
    public bool $storefrontEnabled;
    public ?float $totalCustomers;
    public ?float $totalMerchants;
    public ?float $totalRevenue;
    public ?float $totalTransactions;
    public string $updatedAt;
    public string $verificationStatus;
    public ?string $websiteUrl;

    public function __construct(array $data = [])
    {
        $this->arr = $data['arr'] ?? null;
        $this->createdAt = $data['created_at'] ?? null;
        $this->defaultCurrency = $data['default_currency'] ?? null;
        $this->deletedAt = $data['deleted_at'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->employeeNumber = $data['employee_number'] ?? null;
        $this->industry = $data['industry'] ?? null;
        $this->isDeleted = $data['is_deleted'] ?? null;
        $this->isStarterBusiness = $data['is_starter_business'] ?? null;
        $this->logoUrl = $data['logo_url'] ?? null;
        $this->merchantLifetimeValue = $data['merchant_lifetime_value'] ?? null;
        $this->metadata = $data['metadata'] ?? null;
        $this->mrr = $data['mrr'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->organizationId = $data['organization_id'] ?? null;
        $this->phoneNumber = $data['phone_number'] ?? null;
        $this->pinCode = $data['pin_code'] ?? null;
        $this->slug = $data['slug'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->storefrontEnabled = $data['storefront_enabled'] ?? null;
        $this->totalCustomers = $data['total_customers'] ?? null;
        $this->totalMerchants = $data['total_merchants'] ?? null;
        $this->totalRevenue = $data['total_revenue'] ?? null;
        $this->totalTransactions = $data['total_transactions'] ?? null;
        $this->updatedAt = $data['updated_at'] ?? null;
        $this->verificationStatus = $data['verification_status'] ?? null;
        $this->websiteUrl = $data['website_url'] ?? null;
    }
}
