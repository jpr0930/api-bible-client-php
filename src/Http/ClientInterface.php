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
     * @return Response
     */
    public function request(string $url, array $params = []): Response;
}