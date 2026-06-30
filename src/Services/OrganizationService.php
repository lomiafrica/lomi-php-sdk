<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (OrganizationService)
 */
class OrganizationService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Get Radar settings for the organization
     */
    public function getSettings(): array
    {
        $path = '/organization/radar-settings';

        return $this->client->request('GET', $path);
    }


    /**
     * Update Radar settings
     */
    public function updateSettings(?array $body = null): array
    {
        $path = '/organization/radar-settings';

        return $this->client->request('PATCH', $path, ['json' => $body]);
    }

}
