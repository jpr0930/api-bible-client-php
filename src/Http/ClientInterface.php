<?php

namespace ApiBibleClient\Http;

/**
 * Interface ClientInterface
 * @package ApiBibleClient\Http
 */
interface ClientInterface {
    /**
     * @param string $url
     * @param array  $params
     * @param array  $data
     * @return Response
     */
    public function request(string $url, array $params = [], array $data = []): Response;
}