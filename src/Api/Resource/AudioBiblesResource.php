<?php

namespace ApiBibleClient\Api\Resource;

use ApiBibleClient\Api\Collection\BibleCollection;

/**
 * Class AudioBiblesResource
 * @package ApiBibleClient\Api\Resource
 */
class AudioBiblesResource extends ResourceBase {
    /**
     *
     */
    public const URI = '/audio-bibles';


    /**
     * @param array $params
     * @return BibleCollection
     */
    public function get(array $params = []) {
        $content = $this->client->request(self::BASE_URI . self::URI, $params)->getContent();

        return BibleCollection::createFromArray($content['data']);
    }
}