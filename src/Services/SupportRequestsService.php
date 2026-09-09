<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (SupportRequestsService)
 */
class SupportRequestsService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Fermer une demande d\'assistance
     */
    public function close(string $id): array
    {
        $path = '/support-requests/{id}/close';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('POST', $path);
    }


    /**
     * Créer une demande d\'assistance
     */
    public function create(?array $body = null): array
    {
        $path = '/support-requests';

        return $this->client->request('POST', $path, ['json' => $body]);
    }


    /**
     * Obtenir une demande d\'assistance
     */
    public function get(string $id): array
    {
        $path = '/support-requests/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Lister les demandes d\'assistance
     */
    public function list(?array $params = null): array
    {
        $path = '/support-requests';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }

}
