<?php

namespace ApiBibleClient\Api;

use ApiBibleClient\Api\Resource\AudioBibles;
use ApiBibleClient\Api\Resource\Bibles;
use ApiBibleClient\Api\Resource\ResourceFactory;
use ApiBibleClient\Http\ClientInterface;
use ApiBibleClient\Http\Response;

/**
 * Class RestClient
 * @package ApiBibleClient\Api
 *
 * Rest client for use in Resource classes
 *
 * @property AudioBibles $audioBibles
 * @property Bibles      $bibles
 */
class RestClient {

    /** @var ClientInterface */
    private $client;

    /** @var ResourceFactory */
    private $resourceFactory;

    /**
     * RestClient constructor.
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client) {
        $this->client = $client;
    }

    /**
     * Magic method implementation for lazy loading of API resource classes
     *
     * @param $name
     * @return mixed
     */
    public function __get($name) {
        if ($this->resourceFactory === null) {
            $this->resourceFactory = new ResourceFactory($this);
        }

        return $this->resourceFactory->getResourceClass($name);
    }

    /**
     * Wrapper to expose internal HTTP client request method
     *
     * @param string $url
     * @param array  $params
     * @return Response
     */
    public function request(string $url, array $params = []): Response {
        return $this->client->request($url, $params);
    }


}