<?php
/**
 * BeneficiaryPayouts Model
 * AUTO-GENERATED - Do not edit manually
 */

namespace Lomi\Models;

class BeneficiaryPayouts
{
    public string $accountId;
    public float $amount;
    public string $createdAt;
    public ?string $createdBy;
    public string $currencyCode;
    public ?array $metadata;
    public string $organizationId;
    public string $payoutId;
    public ?string $payoutMethodId;
    public ?string $providerCode;
    public ?string $spiBulkInstructionId;
    public string $status;
    public string $updatedAt;

    public function __construct(array $data = [])
    {
        $this->accountId = $data['account_id'] ?? null;
        $this->amount = $data['amount'] ?? null;
        $this->createdAt = $data['created_at'] ?? null;
        $this->createdBy = $data['created_by'] ?? null;
        $this->currencyCode = $data['currency_code'] ?? null;
        $this->metadata = $data['metadata'] ?? null;
        $this->organizationId = $data['organization_id'] ?? null;
        $this->payoutId = $data['payout_id'] ?? null;
        $this->payoutMethodId = $data['payout_method_id'] ?? null;
        $this->providerCode = $data['provider_code'] ?? null;
        $this->spiBulkInstructionId = $data['spi_bulk_instruction_id'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->updatedAt = $data['updated_at'] ?? null;
    }
}
