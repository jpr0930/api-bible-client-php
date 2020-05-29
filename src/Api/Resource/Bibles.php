<?php

namespace ApiBibleClient\Api\Resource;

use ApiBibleClient\Api\Collection\BibleSummaryCollection;
use ApiBibleClient\Api\Model\Bible;

/**
 * Class Bibles
 * @package ApiBibleClient\Api\Resource
 */
class Bibles extends ResourceBase {
    /**
     *
     */
    public const URI = '/bibles';

    /**
     * @param array $params
     * @return BibleSummaryCollection
     */
    public function all(array $params = []): BibleSummaryCollection {
        $content = $this->client->request(self::BASE_URI . self::URI, $params)->getContent();

        return BibleSummaryCollection::createFromArray($content['data']);
    }

    /**
     * @param string $id
     * @return Bible
     */
    public function get(string $id): Bible {
        $content = $this->client->request(self::BASE_URI . self::URI . "/{$id}")->getContent();

        return Bible::createFromArray($content['data']);
    }
}