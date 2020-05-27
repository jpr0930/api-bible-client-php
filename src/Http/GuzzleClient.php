<?php


namespace ApiBibleClient\Http;

use ApiBibleClient\Exception\HttpException;
use GuzzleHttp\ClientInterface as GuzzleClientInterface;
use GuzzleHttp\Exception\RequestException;

final class GuzzleClient extends ClientBase implements ClientInterface {

    /**
     * @var GuzzleClientInterface
     */
    private $client;

    public function __construct(string $api_key, GuzzleClientInterface $client) {
        parent::__construct($api_key);
        $this->client = $client;
    }

    public function request(
        string $url,
        array $params = [],
        array $data = []
    ): Response {
        $options = [
            'headers' => [
                'Accept'  => 'application/json',
                'api-key' => $this->api_key,
            ]
        ];

        try {
            $response = $this->client->request('GET', $url, $options);
        } catch (RequestException $exception) {
            throw new HttpException("Unable to complete request", 0, $exception);
        }

        return new Response($response->getStatusCode(), $response->getBody(), $response->getHeaders());
    }
}