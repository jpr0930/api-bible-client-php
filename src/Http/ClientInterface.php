<?php

namespace ApiBibleClient\Http;

interface ClientInterface {
    public function request(string $url, array $params = [], array $data = []): Response;
}