<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (InvoicesService)
 */
class InvoicesService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Créer une facture
     */
    public function create(?array $body = null): array
    {
        $path = '/invoices';

        return $this->client->request('POST', $path, ['json' => $body]);
    }


    /**
     * Créer ou récupérer une session de paiement de facture
     */
    public function createCheckoutSession(string $id): array
    {
        $path = '/invoices/{id}/checkout-session';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('POST', $path);
    }


    /**
     * Finalize a draft invoice
     */
    public function finalize(string $id): array
    {
        $path = '/invoices/{id}/finalize';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('POST', $path);
    }


    /**
     * Obtenir une facture
     */
    public function get(string $id): array
    {
        $path = '/invoices/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Lister les factures
     */
    public function list(?array $params = null): array
    {
        $path = '/invoices';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }


    /**
     * Invoice PDF
     */
    public function pdf(string $id): array
    {
        $path = '/invoices/{id}/pdf';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('GET', $path);
    }


    /**
     * Send an invoice reminder
     */
    public function remind(string $id): array
    {
        $path = '/invoices/{id}/remind';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('POST', $path);
    }


    /**
     * Send an invoice
     */
    public function send(string $id): array
    {
        $path = '/invoices/{id}/send';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('POST', $path);
    }


    /**
     * Modifier une facture
     */
    public function update(string $id, ?array $body = null): array
    {
        $path = '/invoices/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('PATCH', $path, ['json' => $body]);
    }


    /**
     * Void an invoice
     */
    public function voidInvoice(string $id): array
    {
        $path = '/invoices/{id}/void';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('POST', $path);
    }

}
