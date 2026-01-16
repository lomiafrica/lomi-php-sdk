<?php
/**
 * PaymentRequests Model
 * AUTO-GENERATED - Do not edit manually
 */

namespace Lomi\Models;

class PaymentRequests
{
    public float $amount;
    public string $createdAt;
    public ?string $createdBy;
    public string $currencyCode;
    public ?string $customerId;
    public ?string $description;
    public string $environment;
    public string $expiryDate;
    public string $organizationId;
    public ?string $paymentLink;
    public ?string $paymentReference;
    public string $requestId;
    public ?string $spiAccountNumber;
    public ?string $spiBulkInstructionId;
    public bool $spiConfirmation;
    public ?string $spiDateEnvoi;
    public ?string $spiDateIrrevocabilite;
    public ?string $spiDateLimitePaiement;
    public ?string $spiDateLimiteReponse;
    public ?string $spiDateRejet;
    public bool $spiDebitDiffere;
    public ?string $spiEnd2endId;
    public ?string $spiPayeurAlias;
    public ?string $spiPayeurNom;
    public ?string $spiPayeurPays;
    public ?string $spiRefDocNumero;
    public ?float $spiRemiseAmount;
    public ?float $spiRemiseRate;
    public ?string $spiTxId;
    public string $status;
    public string $updatedAt;

    public function __construct(array $data = [])
    {
        $this->amount = $data['amount'] ?? null;
        $this->createdAt = $data['created_at'] ?? null;
        $this->createdBy = $data['created_by'] ?? null;
        $this->currencyCode = $data['currency_code'] ?? null;
        $this->customerId = $data['customer_id'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->environment = $data['environment'] ?? null;
        $this->expiryDate = $data['expiry_date'] ?? null;
        $this->organizationId = $data['organization_id'] ?? null;
        $this->paymentLink = $data['payment_link'] ?? null;
        $this->paymentReference = $data['payment_reference'] ?? null;
        $this->requestId = $data['request_id'] ?? null;
        $this->spiAccountNumber = $data['spi_account_number'] ?? null;
        $this->spiBulkInstructionId = $data['spi_bulk_instruction_id'] ?? null;
        $this->spiConfirmation = $data['spi_confirmation'] ?? null;
        $this->spiDateEnvoi = $data['spi_date_envoi'] ?? null;
        $this->spiDateIrrevocabilite = $data['spi_date_irrevocabilite'] ?? null;
        $this->spiDateLimitePaiement = $data['spi_date_limite_paiement'] ?? null;
        $this->spiDateLimiteReponse = $data['spi_date_limite_reponse'] ?? null;
        $this->spiDateRejet = $data['spi_date_rejet'] ?? null;
        $this->spiDebitDiffere = $data['spi_debit_differe'] ?? null;
        $this->spiEnd2endId = $data['spi_end2end_id'] ?? null;
        $this->spiPayeurAlias = $data['spi_payeur_alias'] ?? null;
        $this->spiPayeurNom = $data['spi_payeur_nom'] ?? null;
        $this->spiPayeurPays = $data['spi_payeur_pays'] ?? null;
        $this->spiRefDocNumero = $data['spi_ref_doc_numero'] ?? null;
        $this->spiRemiseAmount = $data['spi_remise_amount'] ?? null;
        $this->spiRemiseRate = $data['spi_remise_rate'] ?? null;
        $this->spiTxId = $data['spi_tx_id'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->updatedAt = $data['updated_at'] ?? null;
    }
}
