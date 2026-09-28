<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (ProductsService)
 */
class ProductsService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Ajouter un prix à un produit
     */
    public function addPrice(string $id, ?array $body = null): array
    {
        $path = '/products/{id}/prices';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('POST', $path, ['json' => $body]);
    }


    /**
     * Archiver un produit
     */
    public function archive(string $id): array
    {
        $path = '/products/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('DELETE', $path);
    }


    /**
     * Créer un produit
     */
    public function create(?array $body = null): array
    {
        $path = '/products';

        return $this->client->request('POST', $path, ['json' => $body]);
    }


    /**
     * Obtenir un produit par ID
     */
    public function get(string $id): array
    {
        $path = '/products/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Lister les produits
     */
    public function list(?array $params = null): array
    {
        $path = '/products';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }


    /**
     * Définir le prix par défaut
     */
    public function setDefaultPrice(string $id, string $priceId): array
    {
        $path = '/products/{id}/prices/{priceId}/default';
        $path = str_replace('{id}', $id, $path);
        $path = str_replace('{priceId}', $priceId, $path);

        return $this->client->request('POST', $path);
    }


    /**
     * Mettre à jour un produit
     */
    public function update(string $id, ?array $body = null): array
    {
        $path = '/products/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('PATCH', $path, ['json' => $body]);
    }


    /**
     * Update several product prices
     */
    public function updatePricesBatch(?array $body = null): array
    {
        $path = '/products/prices/batch';

        return $this->client->request('POST', $path, ['json' => $body]);
    }

}
