<?php
/**
 * Transactions Model
 * AUTO-GENERATED - Do not edit manually
 */

namespace Lomi\Models;

class Transactions
{
    public ?string $checkoutSessionId;
    public string $createdAt;
    public string $currencyCode;
    public string $customerId;
    public ?string $description;
    public float $discountAmount;
    public string $environment;
    public float $feeAmount;
    public ?string $feeStructureId;
    public float $grossAmount;
    public string $integrationSource;
    public bool $isBnpl;
    public bool $isPos;
    public ?array $metadata;
    public float $netAmount;
    public string $organizationId;
    public string $paymentMethodCode;
    public ?string $priceId;
    public ?string $productId;
    public string $providerCode;
    public float $quantity;
    public ?string $spiAccountNumber;
    public ?string $spiBulkInstructionId;
    public ?string $spiDateEnvoi;
    public ?string $spiDateIrrevocabilite;
    public ?float $spiDiscountAmount;
    public ?float $spiDiscountRate;
    public ?string $spiEnd2endId;
    public ?string $spiTxId;
    public string $status;
    public ?string $stripePaymentIntentId;
    public ?string $subscriptionId;
    public string $transactionId;
    public string $transactionType;
    public string $updatedAt;

    public function __construct(array $data = [])
    {
        $this->checkoutSessionId = $data['checkout_session_id'] ?? null;
        $this->createdAt = $data['created_at'] ?? null;
        $this->currencyCode = $data['currency_code'] ?? null;
        $this->customerId = $data['customer_id'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->discountAmount = $data['discount_amount'] ?? null;
        $this->environment = $data['environment'] ?? null;
        $this->feeAmount = $data['fee_amount'] ?? null;
        $this->feeStructureId = $data['fee_structure_id'] ?? null;
        $this->grossAmount = $data['gross_amount'] ?? null;
        $this->integrationSource = $data['integration_source'] ?? null;
        $this->isBnpl = $data['is_bnpl'] ?? null;
        $this->isPos = $data['is_pos'] ?? null;
        $this->metadata = $data['metadata'] ?? null;
        $this->netAmount = $data['net_amount'] ?? null;
        $this->organizationId = $data['organization_id'] ?? null;
        $this->paymentMethodCode = $data['payment_method_code'] ?? null;
        $this->priceId = $data['price_id'] ?? null;
        $this->productId = $data['product_id'] ?? null;
        $this->providerCode = $data['provider_code'] ?? null;
        $this->quantity = $data['quantity'] ?? null;
        $this->spiAccountNumber = $data['spi_account_number'] ?? null;
        $this->spiBulkInstructionId = $data['spi_bulk_instruction_id'] ?? null;
        $this->spiDateEnvoi = $data['spi_date_envoi'] ?? null;
        $this->spiDateIrrevocabilite = $data['spi_date_irrevocabilite'] ?? null;
        $this->spiDiscountAmount = $data['spi_discount_amount'] ?? null;
        $this->spiDiscountRate = $data['spi_discount_rate'] ?? null;
        $this->spiEnd2endId = $data['spi_end2end_id'] ?? null;
        $this->spiTxId = $data['spi_tx_id'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->stripePaymentIntentId = $data['stripe_payment_intent_id'] ?? null;
        $this->subscriptionId = $data['subscription_id'] ?? null;
        $this->transactionId = $data['transaction_id'] ?? null;
        $this->transactionType = $data['transaction_type'] ?? null;
        $this->updatedAt = $data['updated_at'] ?? null;
    }
}
