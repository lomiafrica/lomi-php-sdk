<?php

namespace Lomi\Services;

use Lomi\LomiClient;

/**
 * Public merchant API (TeamService)
 */
class TeamService
{
    private LomiClient $client;

    public function __construct(LomiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Inviter un membre
     */
    public function invite(?array $body = null): array
    {
        $path = '/team/invitations';

        return $this->client->request('POST', $path, ['json' => $body]);
    }


    /**
     * Lister l’équipe
     */
    public function list(): array
    {
        $path = '/team';

        return $this->client->request('GET', $path);
    }


    /**
     * Lister les rôles
     */
    public function listRoles(): array
    {
        $path = '/team/roles';

        return $this->client->request('GET', $path);
    }


    /**
     * Retirer un membre
     */
    public function remove(string $memberId): array
    {
        $path = '/team/members/{memberId}';
        $path = str_replace('{memberId}', $memberId, $path);

        return $this->client->request('DELETE', $path);
    }


    /**
     * Révoquer une invitation
     */
    public function revokeInvite(): array
    {
        $path = '/team/invitations';

        return $this->client->request('DELETE', $path);
    }


    /**
     * Changer le rôle d’un membre
     */
    public function updateRole(string $memberId, ?array $body = null): array
    {
        $path = '/team/members/{memberId}';
        $path = str_replace('{memberId}', $memberId, $path);

        return $this->client->request('PATCH', $path, ['json' => $body]);
    }

}
