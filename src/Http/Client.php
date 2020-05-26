<?php

namespace ApiBibleClient\Http;

interface Client {
    public function request(string $method, string $url, string $api_key, array $params = [], array $data = []): Response;
}