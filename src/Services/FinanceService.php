<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (FinanceService)
 */
class FinanceService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Receivables aging buckets
     */
    public function getAging(): array
    {
        $path = '/finance/aging';

        return $this->client->request('GET', $path);
    }


    /**
     * Daily cash in and out over a date range
     */
    public function getCashflow(?array $params = null): array
    {
        $path = '/finance/cashflow';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }


    /**
     * Reconcile settlements vs transactions vs payouts
     */
    public function getReconcile(): array
    {
        $path = '/finance/reconcile';

        return $this->client->request('GET', $path);
    }


    /**
     * Finance summary
     */
    public function getSummary(): array
    {
        $path = '/finance/summary';

        return $this->client->request('GET', $path);
    }

}
