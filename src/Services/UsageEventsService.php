<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (UsageEventsService)
 */
class UsageEventsService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Record a usage event
     */
    public function create(): array
    {
        $path = '/usage-events';

        return $this->client->request('POST', $path);
    }


    /**
     * Get a usage event
     */
    public function get(string $id): array
    {
        $path = '/usage-events/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('GET', $path);
    }


    /**
     * List usage events
     */
    public function list(?array $params = null): array
    {
        $path = '/usage-events';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }

}
