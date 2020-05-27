<?php

namespace ApiBibleClient\Api\Resource;

use ApiBibleClient\Http\ClientInterface;

abstract class ResourceBase {
    const BASE_URI = 'https://api.scripture.api.bible/v1';

    protected $client;

    public function __construct(ClientInterface $client) {
        $this->client = $client;
    }

}