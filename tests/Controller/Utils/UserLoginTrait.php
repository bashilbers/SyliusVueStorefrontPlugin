<?php

declare(strict_types=1);

namespace Tests\BitBag\SyliusVueStorefrontPlugin\Controller\Utils;

use Symfony\Bundle\FrameworkBundle\Client;
use Tests\BitBag\SyliusVueStorefrontPlugin\Controller\JsonApiTestCase;

trait UserLoginTrait
{
    /** @var Client */
    protected $client;

    private $token;

    private function authenticateUser(string $username, string $password): void
    {
        $data =
<<<JSON
        {
            "username": "$username",
            "password": "$password"
        }
JSON;

        $this->client->request('POST', '/vsbridge/user/login', [], [], JsonApiTestCase::CONTENT_TYPE_HEADER, $data);

        $response = $this->client->getResponse();

        $content = json_decode($response->getContent());

        $this->token = $content->result;
    }
}
