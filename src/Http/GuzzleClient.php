<?php


namespace ApiBibleClient\Http;

use ApiBibleClient\Exception\HttpException;
use GuzzleHttp\ClientInterface as GuzzleClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;

/**
 * Class GuzzleClient
 * @package ApiBibleClient\Http
 */
final class GuzzleClient extends ClientBase implements ClientInterface {

    /**
     * @var GuzzleClientInterface
     */
    private $client;

    /**
     * GuzzleClient constructor.
     * @param string                $api_key
     * @param GuzzleClientInterface $client
     */
    public function __construct(string $api_key, GuzzleClientInterface $client) {
        parent::__construct($api_key);
        $this->client = $client;
    }

    /**
     * @param string $url
     * @param array  $params
     * @param array  $data
     * @return Response
     * @throws HttpException
     * @throws GuzzleException
     */
    public function request(
        string $url,
        array $params = [],
        array $data = []
    ): Response {
        $options = [
            'headers' => [
                'Accept' => 'application/json',
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