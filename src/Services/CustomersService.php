<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (CustomersService)
 */
class CustomersService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Créer un client
     */
    public function create(?array $body = null): array
    {
        $path = '/customers';

        return $this->client->request('POST', $path, ['json' => $body]);
    }


    /**
     * Créer une session de lancement du portail client
     */
    public function createPortalLaunchSession(string $id, ?array $body = null): array
    {
        $path = '/customers/{id}/portal-launch-session';
        $path = str_replace('{id}', rawurlencode($id), $path);

        return $this->client->request('POST', $path, ['json' => $body]);
    }


    /**
     * Supprimer un client
     */
    public function delete(string $id): array
    {
        $path = '/customers/{id}';
        $path = str_replace('{id}', rawurlencode($id), $path);

        return $this->client->request('DELETE', $path);
    }


    /**
     * Obtenir un client par ID
     */
    public function get(string $id): array
    {
        $path = '/customers/{id}';
        $path = str_replace('{id}', rawurlencode($id), $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Hosted customer portal audit
     */
    public function getPortalAudit(string $id, ?array $params = null): array
    {
        $path = '/customers/{id}/portal-audit';
        $path = str_replace('{id}', rawurlencode($id), $path);

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }


    /**
     * Transactions du client
     */
    public function getTransactions(string $id): array
    {
        $path = '/customers/{id}/transactions';
        $path = str_replace('{id}', rawurlencode($id), $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Lister les clients
     */
    public function list(?array $params = null): array
    {
        $path = '/customers';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }


    /**
     * Mettre à jour un client
     */
    public function update(string $id, ?array $body = null): array
    {
        $path = '/customers/{id}';
        $path = str_replace('{id}', rawurlencode($id), $path);

        return $this->client->request('PATCH', $path, ['json' => $body]);
    }

}
