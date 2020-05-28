<?php

namespace ApiBibleClient\Api\Resource;

use ApiBibleClient\Api\Collection\BibleCollection;

/**
 * Class BiblesResource
 * @package ApiBibleClient\Api\Resource
 */
class BiblesResource extends ResourceBase {
    /**
     *
     */
    public const URI = '/bibles';

    /**
     * @return BibleCollection
     */
    public function get(array $params = []) {
        $content = $this->client->request(self::BASE_URI . self::URI, $params)->getContent();

        return BibleCollection::createFromArray($content['data']);
    }
}