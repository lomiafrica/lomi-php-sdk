<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (AccountService)
 */
class AccountService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Supprimer le compte marchand
     */
    public function deleteAccount(?array $body = null): array
    {
        $path = '/account/delete';

        return $this->client->request('POST', $path, ['json' => $body]);
    }


    /**
     * Exporter les données du compte
     */
    public function export(): array
    {
        $path = '/account/export';

        return $this->client->request('POST', $path);
    }

}
