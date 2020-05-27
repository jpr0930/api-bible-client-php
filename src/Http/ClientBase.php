<?php

namespace ApiBibleClient\Http;

/**
 * Class ClientBase
 * @package ApiBibleClient\Http
 */
abstract class ClientBase {

    /** @var string */
    protected $api_key;

    /**
     * ClientBase constructor.
     * @param string $api_key
     */
    public function __construct(string $api_key) {
        $this->api_key = $api_key;
    }

}