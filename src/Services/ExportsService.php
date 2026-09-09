<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (ExportsService)
 */
class ExportsService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Create an export job
     */
    public function create(): array
    {
        $path = '/exports';

        return $this->client->request('POST', $path);
    }


    /**
     * Get export job status and download URL
     */
    public function get(string $id): array
    {
        $path = '/exports/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('GET', $path);
    }


    /**
     * List export jobs
     */
    public function list(): array
    {
        $path = '/exports';

        return $this->client->request('GET', $path);
    }

}
