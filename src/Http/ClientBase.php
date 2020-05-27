<?php

namespace ApiBibleClient\Http;

abstract class ClientBase {

    protected $api_key;

    public function __construct(string $api_key) {
        $this->api_key = $api_key;
    }

}