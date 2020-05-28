<?php

namespace ApiBibleClient\Api;

use ApiBibleClient\Api\Resource\BibleResource;
use ApiBibleClient\Api\Resource\BiblesResource;
use ApiBibleClient\Api\Resource\ResourceFactory;
use ApiBibleClient\Http\ClientInterface;
use ApiBibleClient\Http\Response;

/**
 * Class RestClient
 * @package ApiBibleClient\Api
 *
 * @property BibleResource  $bible
 * @property BiblesResource $bibles
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
     * @param string $url
     * @param array  $params
     * @return Response
     */
    public function request(string $url, array $params = []): Response {
        return $this->client->request($url, $params);
    }


}