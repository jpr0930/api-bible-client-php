<?php

namespace ApiBibleClient\Api\Resource;

use ApiBibleClient\Api\RestClient;
use ApiBibleClient\Http\ClientInterface;

/**
 * Class ResourceBase
 * @package ApiBibleClient\Api\Resource
 */
abstract class ResourceBase {
    /**
     *
     */
    const BASE_URI = 'https://api.scripture.api.bible/v1';

    /** @var ClientInterface */
    protected $client;

    /**
     * ResourceBase constructor.
     * @param RestClient $client
     */
    public function __construct(RestClient $client) {
        $this->client = $client;
    }

}