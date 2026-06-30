<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (OrganizationsService)
 */
class OrganizationsService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Organisation par ID
     */
    public function get(string $id): array
    {
        $path = '/organizations/{id}';
        $path = str_replace('{id}', rawurlencode($id), $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Indicateurs de l\'organisation
     */
    public function getMetrics(): array
    {
        $path = '/organizations/metrics';

        return $this->client->request('GET', $path);
    }


    /**
     * Détails de l\'organisation
     */
    public function list(): array
    {
        $path = '/organizations';

        return $this->client->request('GET', $path);
    }

}
