<?php
/**
 * lomi. PHP SDK Client
 * AUTO-GENERATED - Do not edit manually
 */

namespace Lomi;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

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
        $this->baseUrl = $options['base_url'] ?? 'https://api.lomi.africa/v1';
        
        if (($options['environment'] ?? 'live') === 'test') {
            $this->baseUrl = 'https://sandbox.api.lomi.africa/v1';
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


class AccountsService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    /**
     * List accounts
     */
    public function list(array $params = []): array
    {
        return $this->client->request('GET', '/accounts', [
            'query' => $params
        ]);
    }
    
    /**
     * Get a single account
     */
    public function get(string $id): array
    {
        return $this->client->request('GET', "/accounts/{$id}");
    }
}


class OrganizationsService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    /**
     * List organizations
     */
    public function list(array $params = []): array
    {
        return $this->client->request('GET', '/organizations', [
            'query' => $params
        ]);
    }
    
    /**
     * Get a single organization
     */
    public function get(string $id): array
    {
        return $this->client->request('GET', "/organizations/{$id}");
    }
}


class CustomersService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    /**
     * List customers
     */
    public function list(array $params = []): array
    {
        return $this->client->request('GET', '/customers', [
            'query' => $params
        ]);
    }
    
    /**
     * Get a single customer
     */
    public function get(string $id): array
    {
        return $this->client->request('GET', "/customers/{$id}");
    }
}


class PaymentRequestsService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    /**
     * List payment_requests
     */
    public function list(array $params = []): array
    {
        return $this->client->request('GET', '/payment-requests', [
            'query' => $params
        ]);
    }
    
    /**
     * Get a single payment_request
     */
    public function get(string $id): array
    {
        return $this->client->request('GET', "/payment-requests/{$id}");
    }
}


class TransactionsService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    /**
     * List transactions
     */
    public function list(array $params = []): array
    {
        return $this->client->request('GET', '/transactions', [
            'query' => $params
        ]);
    }
    
    /**
     * Get a single transaction
     */
    public function get(string $id): array
    {
        return $this->client->request('GET', "/transactions/{$id}");
    }
}


class RefundsService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    /**
     * List refunds
     */
    public function list(array $params = []): array
    {
        return $this->client->request('GET', '/refunds', [
            'query' => $params
        ]);
    }
    
    /**
     * Get a single refund
     */
    public function get(string $id): array
    {
        return $this->client->request('GET', "/refunds/{$id}");
    }
}


class ProductsService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    /**
     * List products
     */
    public function list(array $params = []): array
    {
        return $this->client->request('GET', '/products', [
            'query' => $params
        ]);
    }
    
    /**
     * Get a single product
     */
    public function get(string $id): array
    {
        return $this->client->request('GET', "/products/{$id}");
    }
}


class SubscriptionsService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    /**
     * List subscriptions
     */
    public function list(array $params = []): array
    {
        return $this->client->request('GET', '/subscriptions', [
            'query' => $params
        ]);
    }
    
    /**
     * Get a single subscription
     */
    public function get(string $id): array
    {
        return $this->client->request('GET', "/subscriptions/{$id}");
    }
}


class DiscountCouponsService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    /**
     * List discount_coupons
     */
    public function list(array $params = []): array
    {
        return $this->client->request('GET', '/discount-coupons', [
            'query' => $params
        ]);
    }
    
    /**
     * Get a single discount_coupon
     */
    public function get(string $id): array
    {
        return $this->client->request('GET', "/discount-coupons/{$id}");
    }
}


class CheckoutSessionsService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    /**
     * List checkout_sessions
     */
    public function list(array $params = []): array
    {
        return $this->client->request('GET', '/checkout-sessions', [
            'query' => $params
        ]);
    }
    
    /**
     * Get a single checkout_session
     */
    public function get(string $id): array
    {
        return $this->client->request('GET', "/checkout-sessions/{$id}");
    }
}


class PaymentLinksService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    /**
     * List payment_links
     */
    public function list(array $params = []): array
    {
        return $this->client->request('GET', '/payment-links', [
            'query' => $params
        ]);
    }
    
    /**
     * Get a single payment_link
     */
    public function get(string $id): array
    {
        return $this->client->request('GET', "/payment-links/{$id}");
    }
}


class PayoutsService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    /**
     * List payouts
     */
    public function list(array $params = []): array
    {
        return $this->client->request('GET', '/payouts', [
            'query' => $params
        ]);
    }
    
    /**
     * Get a single payout
     */
    public function get(string $id): array
    {
        return $this->client->request('GET', "/payouts/{$id}");
    }
}


class BeneficiaryPayoutsService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    /**
     * List beneficiary_payouts
     */
    public function list(array $params = []): array
    {
        return $this->client->request('GET', '/beneficiary-payouts', [
            'query' => $params
        ]);
    }
    
    /**
     * Get a single beneficiary_payout
     */
    public function get(string $id): array
    {
        return $this->client->request('GET', "/beneficiary-payouts/{$id}");
    }
}


class WebhooksService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    /**
     * List webhooks
     */
    public function list(array $params = []): array
    {
        return $this->client->request('GET', '/webhooks', [
            'query' => $params
        ]);
    }
    
    /**
     * Get a single webhook
     */
    public function get(string $id): array
    {
        return $this->client->request('GET', "/webhooks/{$id}");
    }
}


class WebhookDeliveryLogsService
{
    private LomiClient $client;
    
    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }
    
    /**
     * List webhook_delivery_logs
     */
    public function list(array $params = []): array
    {
        return $this->client->request('GET', '/webhook-delivery-logs', [
            'query' => $params
        ]);
    }
    
    /**
     * Get a single webhook_delivery_log
     */
    public function get(string $id): array
    {
        return $this->client->request('GET', "/webhook-delivery-logs/{$id}");
    }
}

