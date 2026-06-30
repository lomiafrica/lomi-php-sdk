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
    public function addPrice(string $id): array
    {
        $path = '/products/{id}/prices';
        $path = str_replace('{id}', rawurlencode($id), $path);

        return $this->client->request('POST', $path);
    }


    /**
     * Créer un produit
     */
    public function create(): array
    {
        $path = '/products';

        return $this->client->request('POST', $path);
    }


    /**
     * Obtenir un produit par ID
     */
    public function get(string $id): array
    {
        $path = '/products/{id}';
        $path = str_replace('{id}', rawurlencode($id), $path);

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
        $path = '/products/{id}/prices/{priceId}/set-default';
        $path = str_replace('{id}', rawurlencode($id), $path);
        $path = str_replace('{priceId}', rawurlencode($priceId), $path);

        return $this->client->request('POST', $path);
    }

}
