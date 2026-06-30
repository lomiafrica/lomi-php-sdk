<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (RiskAssessmentsService)
 */
class RiskAssessmentsService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Get a risk assessment
     */
    public function findOne(string $id): array
    {
        $path = '/risk-assessments/{id}';
        $path = str_replace('{id}', $id, $path);

        return $this->client->request('GET', $path);
    }


    /**
     * List payment risk assessments
     */
    public function listAssessments(?array $params = null): array
    {
        $path = '/risk-assessments';

        return $this->client->request('GET', $path, ['query' => $params ?? []]);
    }

}
