<?php

namespace ApiBibleClient\Api\Resource;

use ApiBibleClient\Api\Collection\BibleSummaryCollection;
use ApiBibleClient\Api\Model\AudioBible;

/**
 * Class AudioBibles
 * @package ApiBibleClient\Api\Resource
 */
class AudioBibles extends ResourceBase {
    /**
     *
     */
    public const URI = '/audio-bibles';

    /**
     * @param string $id
     * @return AudioBible
     */
    public function get(string $id): AudioBible {
        $content = $this->client->request(self::BASE_URI . self::URI . "/{$id}")->getContent();

        return AudioBible::createFromArray($content['data']);
    }


    /**
     * @param array $params
     * @return BibleSummaryCollection
     */
    public function all(array $params = []): BibleSummaryCollection {
        $content = $this->client->request(self::BASE_URI . self::URI, $params)->getContent();

        return BibleSummaryCollection::createFromArray($content['data']);
    }
}