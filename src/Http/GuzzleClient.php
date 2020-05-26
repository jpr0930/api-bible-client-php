<?php


namespace ApiBibleClient\Http;

use ApiBibleClient\Exception\HttpException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;

final class GuzzleClient implements Client {

    /**
     * @var ClientInterface
     */
    private $client;

    public function __construct(ClientInterface $client) {
        $this->client = $client;
    }

    public function request(
        string $method,
        string $url,
        string $api_key,
        array $params = [],
        array $data = []
    ): Response {
        $options = [
            'headers' => [
                'Accept'  => 'application/json',
                'api-key' => $api_key,
            ]
        ];

        try {
            $response = $this->client->request($method, $url, $options);
        } catch (RequestException $exception) {
            throw new HttpException("Unable to complete request", 0, $exception);
        }

        return new Response($response->getStatusCode(), $response->getBody(), $response->getHeaders());
    }
}