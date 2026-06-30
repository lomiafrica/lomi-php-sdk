<?php
/**
 * lomi. PHP SDK — public merchant allowlist
 */
namespace Lomi;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Lomi\Services\AccountsService;
use Lomi\Services\ChargesService;
use Lomi\Services\CheckoutSessionsService;
use Lomi\Services\CustomersService;
use Lomi\Services\CustomerSubscriptionsService;
use Lomi\Services\DiscountCouponsService;
use Lomi\Services\DisputesService;
use Lomi\Services\MerchantsService;
use Lomi\Services\MetersService;
use Lomi\Services\OrganizationService;
use Lomi\Services\OrganizationsService;
use Lomi\Services\PaymentLinksService;
use Lomi\Services\PaymentRequestsService;
use Lomi\Services\PayoutsService;
use Lomi\Services\ProductsService;
use Lomi\Services\ProvidersService;
use Lomi\Services\RefundsService;
use Lomi\Services\RiskAssessmentsService;
use Lomi\Services\SettlementsService;
use Lomi\Services\SubscriptionsService;
use Lomi\Services\TransactionsService;
use Lomi\Services\UsageBillingService;
use Lomi\Services\UsageEventsService;
use Lomi\Services\UsageSubscriptionsService;
use Lomi\Services\WebhookDeliveryLogsService;
use Lomi\Services\WebhooksService;

class LomiClient
{
    private string $apiKey;
    private string $baseUrl;
    private Client $httpClient;

    public AccountsService $accounts;
    public ChargesService $charges;
    public CheckoutSessionsService $checkoutSessions;
    public CustomersService $customers;
    public CustomerSubscriptionsService $customerSubscriptions;
    public DiscountCouponsService $discountCoupons;
    public DisputesService $disputes;
    public MerchantsService $merchants;
    public MetersService $meters;
    public OrganizationService $organization;
    public OrganizationsService $organizations;
    public PaymentLinksService $paymentLinks;
    public PaymentRequestsService $paymentRequests;
    public PayoutsService $payouts;
    public ProductsService $products;
    public ProvidersService $providers;
    public RefundsService $refunds;
    public RiskAssessmentsService $riskAssessments;
    public SettlementsService $settlements;
    public SubscriptionsService $subscriptions;
    public TransactionsService $transactions;
    public UsageBillingService $usageBilling;
    public UsageEventsService $usageEvents;
    public UsageSubscriptionsService $usageSubscriptions;
    public WebhookDeliveryLogsService $webhookDeliveryLogs;
    public WebhooksService $webhooks;

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

        $this->accounts = new AccountsService($this);
        $this->charges = new ChargesService($this);
        $this->checkoutSessions = new CheckoutSessionsService($this);
        $this->customers = new CustomersService($this);
        $this->customerSubscriptions = new CustomerSubscriptionsService($this);
        $this->discountCoupons = new DiscountCouponsService($this);
        $this->disputes = new DisputesService($this);
        $this->merchants = new MerchantsService($this);
        $this->meters = new MetersService($this);
        $this->organization = new OrganizationService($this);
        $this->organizations = new OrganizationsService($this);
        $this->paymentLinks = new PaymentLinksService($this);
        $this->paymentRequests = new PaymentRequestsService($this);
        $this->payouts = new PayoutsService($this);
        $this->products = new ProductsService($this);
        $this->providers = new ProvidersService($this);
        $this->refunds = new RefundsService($this);
        $this->riskAssessments = new RiskAssessmentsService($this);
        $this->settlements = new SettlementsService($this);
        $this->subscriptions = new SubscriptionsService($this);
        $this->transactions = new TransactionsService($this);
        $this->usageBilling = new UsageBillingService($this);
        $this->usageEvents = new UsageEventsService($this);
        $this->usageSubscriptions = new UsageSubscriptionsService($this);
        $this->webhookDeliveryLogs = new WebhookDeliveryLogsService($this);
        $this->webhooks = new WebhooksService($this);

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
