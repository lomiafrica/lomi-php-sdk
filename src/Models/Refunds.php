<?php
/**
 * Refunds Model
 * AUTO-GENERATED - Do not edit manually
 */

namespace Lomi\Models;

class Refunds
{
    public float $amount;
    public string $createdAt;
    public string $environment;
    public float $feeAmount;
    public ?array $metadata;
    public ?string $reason;
    public string $refundId;
    public float $refundedAmount;
    public ?string $spiAccountNumber;
    public ?string $spiEnd2endId;
    public ?string $spiRetourDateDemande;
    public ?string $spiRetourDateIrrevocabilite;
    public ?string $spiTxId;
    public string $status;
    public string $transactionId;
    public string $updatedAt;

    public function __construct(array $data = [])
    {
        $this->amount = $data['amount'] ?? null;
        $this->createdAt = $data['created_at'] ?? null;
        $this->environment = $data['environment'] ?? null;
        $this->feeAmount = $data['fee_amount'] ?? null;
        $this->metadata = $data['metadata'] ?? null;
        $this->reason = $data['reason'] ?? null;
        $this->refundId = $data['refund_id'] ?? null;
        $this->refundedAmount = $data['refunded_amount'] ?? null;
        $this->spiAccountNumber = $data['spi_account_number'] ?? null;
        $this->spiEnd2endId = $data['spi_end2end_id'] ?? null;
        $this->spiRetourDateDemande = $data['spi_retour_date_demande'] ?? null;
        $this->spiRetourDateIrrevocabilite = $data['spi_retour_date_irrevocabilite'] ?? null;
        $this->spiTxId = $data['spi_tx_id'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->transactionId = $data['transaction_id'] ?? null;
        $this->updatedAt = $data['updated_at'] ?? null;
    }
}
