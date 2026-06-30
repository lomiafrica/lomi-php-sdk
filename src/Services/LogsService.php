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
    public function get(string $type, string $id): array
    {
        $path = '/logs/{type}/{id}';
        $path = str_replace('{type}', $type, $path);
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('GET', $path);
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
