<?php
/**
 * CheckoutSessions Model
 * AUTO-GENERATED - Do not edit manually
 */

namespace Lomi\Models;

class CheckoutSessions
{
    public bool $allowCouponCode;
    public bool $allowQuantity;
    public float $amount;
    public ?string $cancelUrl;
    public string $checkoutSessionId;
    public string $createdAt;
    public ?string $createdBy;
    public string $currencyCode;
    public ?string $customerEmail;
    public ?string $customerId;
    public ?string $customerName;
    public ?string $customerPhone;
    public ?string $description;
    public string $environment;
    public string $expiresAt;
    public ?string $installmentPlanId;
    public string $integrationSource;
    public bool $isPos;
    public bool $isSpi;
    public ?array $metadata;
    public string $organizationId;
    public ?string $paymentLinkId;
    public ?string $paymentRequestId;
    public ?string $priceId;
    public ?string $productId;
    public ?array $qrCodeData;
    public ?string $qrCodeType;
    public float $quantity;
    public bool $requireBillingAddress;
    public ?string $spiAccountNumber;
    public ?string $spiQrCodeId;
    public string $status;
    public ?string $subscriptionId;
    public ?string $successUrl;
    public ?string $title;
    public string $updatedAt;

    public function __construct(array $data = [])
    {
        $this->allowCouponCode = $data['allow_coupon_code'] ?? null;
        $this->allowQuantity = $data['allow_quantity'] ?? null;
        $this->amount = $data['amount'] ?? null;
        $this->cancelUrl = $data['cancel_url'] ?? null;
        $this->checkoutSessionId = $data['checkout_session_id'] ?? null;
        $this->createdAt = $data['created_at'] ?? null;
        $this->createdBy = $data['created_by'] ?? null;
        $this->currencyCode = $data['currency_code'] ?? null;
        $this->customerEmail = $data['customer_email'] ?? null;
        $this->customerId = $data['customer_id'] ?? null;
        $this->customerName = $data['customer_name'] ?? null;
        $this->customerPhone = $data['customer_phone'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->environment = $data['environment'] ?? null;
        $this->expiresAt = $data['expires_at'] ?? null;
        $this->installmentPlanId = $data['installment_plan_id'] ?? null;
        $this->integrationSource = $data['integration_source'] ?? null;
        $this->isPos = $data['is_pos'] ?? null;
        $this->isSpi = $data['is_spi'] ?? null;
        $this->metadata = $data['metadata'] ?? null;
        $this->organizationId = $data['organization_id'] ?? null;
        $this->paymentLinkId = $data['payment_link_id'] ?? null;
        $this->paymentRequestId = $data['payment_request_id'] ?? null;
        $this->priceId = $data['price_id'] ?? null;
        $this->productId = $data['product_id'] ?? null;
        $this->qrCodeData = $data['qr_code_data'] ?? null;
        $this->qrCodeType = $data['qr_code_type'] ?? null;
        $this->quantity = $data['quantity'] ?? null;
        $this->requireBillingAddress = $data['require_billing_address'] ?? null;
        $this->spiAccountNumber = $data['spi_account_number'] ?? null;
        $this->spiQrCodeId = $data['spi_qr_code_id'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->subscriptionId = $data['subscription_id'] ?? null;
        $this->successUrl = $data['success_url'] ?? null;
        $this->title = $data['title'] ?? null;
        $this->updatedAt = $data['updated_at'] ?? null;
    }
}
