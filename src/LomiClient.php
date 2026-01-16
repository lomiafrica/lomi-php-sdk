<?php
/**
 * lomi. PHP SDK Client
 * AUTO-GENERATED - Do not edit manually
 */

namespace Lomi;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Lomi\Services\AccountsService;
use Lomi\Services\OrganizationsService;
use Lomi\Services\CustomersService;
use Lomi\Services\PaymentRequestsService;
use Lomi\Services\TransactionsService;
use Lomi\Services\RefundsService;
use Lomi\Services\ProductsService;
use Lomi\Services\SubscriptionsService;
use Lomi\Services\DiscountCouponsService;
use Lomi\Services\CheckoutSessionsService;
use Lomi\Services\PaymentLinksService;
use Lomi\Services\PayoutsService;
use Lomi\Services\BeneficiaryPayoutsService;
use Lomi\Services\WebhooksService;
use Lomi\Services\WebhookDeliveryLogsService;

class LomiClient
{
    private string $apiKey;
    private string $baseUrl;
    private Client $httpClient;

    public AccountsService $accounts;
    public OrganizationsService $organizations;
    public CustomersService $customers;
    public PaymentRequestsService $paymentRequests;
    public TransactionsService $transactions;
    public RefundsService $refunds;
    public ProductsService $products;
    public SubscriptionsService $subscriptions;
    public DiscountCouponsService $discountCoupons;
    public CheckoutSessionsService $checkoutSessions;
    public PaymentLinksService $paymentLinks;
    public PayoutsService $payouts;
    public BeneficiaryPayoutsService $beneficiaryPayouts;
    public WebhooksService $webhooks;
    public WebhookDeliveryLogsService $webhookDeliveryLogs;

    public function __construct(string $apiKey, array $options = [])
    {
        $this->apiKey = $apiKey;
        $this->baseUrl = $options['base_url'] ?? 'https://api.lomi.africa';
        
        if (($options['environment'] ?? 'live') === 'test') {
            $this->baseUrl = 'https://sandbox.api.lomi.africa';
        }
        
        $this->httpClient = new Client([
            'base_uri' => $this->baseUrl,
            'headers' => [
                'X-API-KEY' => $this->apiKey,
                'Content-Type' => 'application/json',
            ],
        ]);

        // Initialize services
        $this->accounts = new AccountsService($this);
        $this->organizations = new OrganizationsService($this);
        $this->customers = new CustomersService($this);
        $this->paymentRequests = new PaymentRequestsService($this);
        $this->transactions = new TransactionsService($this);
        $this->refunds = new RefundsService($this);
        $this->products = new ProductsService($this);
        $this->subscriptions = new SubscriptionsService($this);
        $this->discountCoupons = new DiscountCouponsService($this);
        $this->checkoutSessions = new CheckoutSessionsService($this);
        $this->paymentLinks = new PaymentLinksService($this);
        $this->payouts = new PayoutsService($this);
        $this->beneficiaryPayouts = new BeneficiaryPayoutsService($this);
        $this->webhooks = new WebhooksService($this);
        $this->webhookDeliveryLogs = new WebhookDeliveryLogsService($this);
    }

    public function request(string $method, string $path, array $options = []): array
    {
        try {
            $response = $this->httpClient->request($method, $path, $options);
            $body = $response->getBody()->getContents();
            return json_decode($body, true) ?? [];
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $response = $e->getResponse();
                throw new LomiException(
                    $e->getMessage(),
                    $response->getStatusCode(),
                    json_decode($response->getBody()->getContents(), true)
                );
            }
            throw new LomiException($e->getMessage());
        }
    }
}

class LomiException extends \Exception
{
    public ?array $body;
    
    public function __construct(string $message, int $code = 0, ?array $body = null)
    {
        parent::__construct($message, $code);
        $this->body = $body;
    }
}
