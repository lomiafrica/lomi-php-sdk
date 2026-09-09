<?php
/**
 * lomi. PHP SDK — public merchant allowlist
 */
namespace Lomi;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Lomi\Services\AccountService;
use Lomi\Services\AccountsService;
use Lomi\Services\ApiKeysService;
use Lomi\Services\ChargesService;
use Lomi\Services\CheckoutSessionsService;
use Lomi\Services\CouponsService;
use Lomi\Services\CustomersService;
use Lomi\Services\DisputesService;
use Lomi\Services\ExportsService;
use Lomi\Services\FinanceService;
use Lomi\Services\InvoicesService;
use Lomi\Services\LogsService;
use Lomi\Services\MerchantsService;
use Lomi\Services\MetersService;
use Lomi\Services\NetworkService;
use Lomi\Services\OrganizationsService;
use Lomi\Services\PaymentLinksService;
use Lomi\Services\PaymentRequestsService;
use Lomi\Services\PayoutMethodsService;
use Lomi\Services\PayoutsService;
use Lomi\Services\ProductsService;
use Lomi\Services\ProvidersService;
use Lomi\Services\RefundsService;
use Lomi\Services\RiskAssessmentsService;
use Lomi\Services\SettingsService;
use Lomi\Services\SettlementsService;
use Lomi\Services\SubscriptionsService;
use Lomi\Services\SupportRequestsService;
use Lomi\Services\TeamService;
use Lomi\Services\TransactionsService;
use Lomi\Services\TransfersService;
use Lomi\Services\UsageService;
use Lomi\Services\WebhooksService;

class LomiClient
{
    private string $apiKey;
    private string $baseUrl;
    private Client $httpClient;

    public AccountService $account;
    public AccountsService $accounts;
    public ApiKeysService $apiKeys;
    public ChargesService $charges;
    public CheckoutSessionsService $checkoutSessions;
    public CouponsService $coupons;
    public CustomersService $customers;
    public DisputesService $disputes;
    public ExportsService $exports;
    public FinanceService $finance;
    public InvoicesService $invoices;
    public LogsService $logs;
    public MerchantsService $merchants;
    public MetersService $meters;
    public NetworkService $network;
    public OrganizationsService $organizations;
    public PaymentLinksService $paymentLinks;
    public PaymentRequestsService $paymentRequests;
    public PayoutMethodsService $payoutMethods;
    public PayoutsService $payouts;
    public ProductsService $products;
    public ProvidersService $providers;
    public RefundsService $refunds;
    public RiskAssessmentsService $riskAssessments;
    public SettingsService $settings;
    public SettlementsService $settlements;
    public SubscriptionsService $subscriptions;
    public SupportRequestsService $supportRequests;
    public TeamService $team;
    public TransactionsService $transactions;
    public TransfersService $transfers;
    public UsageService $usage;
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

        $this->account = new AccountService($this);
        $this->accounts = new AccountsService($this);
        $this->apiKeys = new ApiKeysService($this);
        $this->charges = new ChargesService($this);
        $this->checkoutSessions = new CheckoutSessionsService($this);
        $this->coupons = new CouponsService($this);
        $this->customers = new CustomersService($this);
        $this->disputes = new DisputesService($this);
        $this->exports = new ExportsService($this);
        $this->finance = new FinanceService($this);
        $this->invoices = new InvoicesService($this);
        $this->logs = new LogsService($this);
        $this->merchants = new MerchantsService($this);
        $this->meters = new MetersService($this);
        $this->network = new NetworkService($this);
        $this->organizations = new OrganizationsService($this);
        $this->paymentLinks = new PaymentLinksService($this);
        $this->paymentRequests = new PaymentRequestsService($this);
        $this->payoutMethods = new PayoutMethodsService($this);
        $this->payouts = new PayoutsService($this);
        $this->products = new ProductsService($this);
        $this->providers = new ProvidersService($this);
        $this->refunds = new RefundsService($this);
        $this->riskAssessments = new RiskAssessmentsService($this);
        $this->settings = new SettingsService($this);
        $this->settlements = new SettlementsService($this);
        $this->subscriptions = new SubscriptionsService($this);
        $this->supportRequests = new SupportRequestsService($this);
        $this->team = new TeamService($this);
        $this->transactions = new TransactionsService($this);
        $this->transfers = new TransfersService($this);
        $this->usage = new UsageService($this);
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
