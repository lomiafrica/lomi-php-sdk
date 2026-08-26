<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (LogsService)
 */
class LogsService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Get a log entry
     */
    public function get(string $id, ?array $params = null): array
    {
        $path = '/logs/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }


    /**
     * List logs
     */
    public function list(?array $params = null): array
    {
        $path = '/logs';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }

}
