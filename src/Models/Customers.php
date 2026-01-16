<?php
/**
 * Customers Model
 * AUTO-GENERATED - Do not edit manually
 */

namespace Lomi\Models;

class Customers
{
    public ?string $address;
    public ?string $city;
    public ?string $country;
    public string $createdAt;
    public ?string $createdBy;
    public string $customerId;
    public ?string $deletedAt;
    public ?string $email;
    public string $environment;
    public bool $isBusiness;
    public bool $isDeleted;
    public ?array $metadata;
    public string $name;
    public string $organizationId;
    public ?string $phoneNumber;
    public ?string $postalCode;
    public ?string $providerCustomerId;
    public ?string $spiAliasMbno;
    public ?string $spiAliasShid;
    public ?string $spiPrimaryAlias;
    public string $updatedAt;
    public ?string $whatsappNumber;

    public function __construct(array $data = [])
    {
        $this->address = $data['address'] ?? null;
        $this->city = $data['city'] ?? null;
        $this->country = $data['country'] ?? null;
        $this->createdAt = $data['created_at'] ?? null;
        $this->createdBy = $data['created_by'] ?? null;
        $this->customerId = $data['customer_id'] ?? null;
        $this->deletedAt = $data['deleted_at'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->environment = $data['environment'] ?? null;
        $this->isBusiness = $data['is_business'] ?? null;
        $this->isDeleted = $data['is_deleted'] ?? null;
        $this->metadata = $data['metadata'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->organizationId = $data['organization_id'] ?? null;
        $this->phoneNumber = $data['phone_number'] ?? null;
        $this->postalCode = $data['postal_code'] ?? null;
        $this->providerCustomerId = $data['provider_customer_id'] ?? null;
        $this->spiAliasMbno = $data['spi_alias_mbno'] ?? null;
        $this->spiAliasShid = $data['spi_alias_shid'] ?? null;
        $this->spiPrimaryAlias = $data['spi_primary_alias'] ?? null;
        $this->updatedAt = $data['updated_at'] ?? null;
        $this->whatsappNumber = $data['whatsapp_number'] ?? null;
    }
}
