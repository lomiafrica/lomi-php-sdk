<?php
/**
 * Accounts Model
 * AUTO-GENERATED - Do not edit manually
 */

namespace Lomi\Models;

class Accounts
{
    public string $accountId;
    public float $balance;
    public string $createdAt;
    public string $currencyCode;
    public bool $isSpiAccount;
    public string $organizationId;
    public ?float $spiAccountBalance;
    public ?string $spiAccountBalanceSyncError;
    public ?string $spiAccountBalanceSyncedAt;
    public ?string $spiAccountNumber;
    public string $updatedAt;

    public function __construct(array $data = [])
    {
        $this->accountId = $data['account_id'] ?? null;
        $this->balance = $data['balance'] ?? null;
        $this->createdAt = $data['created_at'] ?? null;
        $this->currencyCode = $data['currency_code'] ?? null;
        $this->isSpiAccount = $data['is_spi_account'] ?? null;
        $this->organizationId = $data['organization_id'] ?? null;
        $this->spiAccountBalance = $data['spi_account_balance'] ?? null;
        $this->spiAccountBalanceSyncError = $data['spi_account_balance_sync_error'] ?? null;
        $this->spiAccountBalanceSyncedAt = $data['spi_account_balance_synced_at'] ?? null;
        $this->spiAccountNumber = $data['spi_account_number'] ?? null;
        $this->updatedAt = $data['updated_at'] ?? null;
    }
}
