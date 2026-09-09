<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (NetworkService)
 */
class NetworkService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Create an account session for embedded components
     */
    public function createAccountSession(?array $body = null): array
    {
        $path = '/network/account-sessions';

        return $this->client->request('POST', $path, ['json' => $body]);
    }


    /**
     * Create a login link for a Member Account
     */
    public function createLoginLink(string $account): array
    {
        $path = '/network/accounts/{account}/login_links';
        $path = str_replace('{account}', $account, $path);

        return $this->client->request('POST', $path);
    }

}
