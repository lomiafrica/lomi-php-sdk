<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (DiscountCouponsService)
 */
class DiscountCouponsService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Créer un coupon
     */
    public function create(): array
    {
        $path = '/discount-coupons';

        return $this->client->request('POST', $path);
    }


    /**
     * Obtenir un coupon par ID
     */
    public function get(string $id): array
    {
        $path = '/discount-coupons/{id}';
        $path = str_replace('{id}', rawurlencode($id), $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Indicateurs de performance du coupon
     */
    public function getPerformance(string $id): array
    {
        $path = '/discount-coupons/{id}/performance';
        $path = str_replace('{id}', rawurlencode($id), $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Lister les coupons
     */
    public function list(): array
    {
        $path = '/discount-coupons';

        return $this->client->request('GET', $path);
    }

}
