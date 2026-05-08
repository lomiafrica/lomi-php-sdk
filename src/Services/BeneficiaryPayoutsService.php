<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (BeneficiaryPayoutsService)
 */
class BeneficiaryPayoutsService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Lancer un paiement vers un bénéficiaire
     */
    public function create(): array
    {
        $path = '/beneficiary-payouts';

        return $this->client->request('POST', $path);
    }


    /**
     * Obtenir un paiement bénéficiaire par ID
     */
    public function get(string $id): array
    {
        $path = '/beneficiary-payouts/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Lister les paiements vers bénéficiaires
     */
    public function list(?array $params = null): array
    {
        $path = '/beneficiary-payouts';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }

}
