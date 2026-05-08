<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (AccountsService)
 */
class AccountsService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Vérifier le solde disponible
     */
    public function checkBalance(string $currency): array
    {
        $path = '/accounts/balance/check/{currency}';
        $path = str_replace('{currency}', $currency, $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Obtenir un compte par ID
     */
    public function get(string $id): array
    {
        $path = '/accounts/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Solde du compte
     */
    public function getBalance(?array $params = null): array
    {
        $path = '/accounts/balance';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }


    /**
     * Détail du solde
     */
    public function getBalanceBreakdown(?array $params = null): array
    {
        $path = '/accounts/balance/breakdown';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }


    /**
     * Lister les comptes
     */
    public function list(): array
    {
        $path = '/accounts';

        return $this->client->request('GET', $path);
    }

}
