<?php

namespace ApiBibleClient\Api\Resource;

use ApiBibleClient\Api\RestClient;

/**
 * Class ResourceFactory
 * @package ApiBibleClient\Api\Resource
 */
class ResourceFactory {
    /** @var array */
    private $services = [];
    /** @var RestClient */
    private $client;

    /**
     * ResourceFactory constructor.
     * @param RestClient $client
     */
    public function __construct(RestClient $client) {
        $this->client = $client;
    }

    /** @var string[] */
    private static $classMap = [
        'bible'  => BibleResource::class,
        'bibles' => BiblesResource::class,
    ];

    /**
     * @param string $name
     * @return mixed
     */
    public function getResourceClass(string $name) {
        $resourceClass = self::$classMap[$name] ?? null;

        if ($resourceClass !== null) {
            if (array_key_exists($name, $this->services) === false) {
                $this->services[$name] = new $resourceClass($this->client);
            }

            var_dump($resourceClass);

            return $this->services[$name];
        }

        throw new \InvalidArgumentException('Undefined resource: ' . $name);
    }

}