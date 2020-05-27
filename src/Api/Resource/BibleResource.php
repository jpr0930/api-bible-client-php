<?php

namespace ApiBibleClient\Api\Resource;

use ApiBibleClient\Api\Model\Bible;

/**
 * Class BibleResource
 * @package ApiBibleClient\Api\Resource
 */
class BibleResource extends ResourceBase {
    /**
     *
     */
    public const URI = '/bibles/%s';

    /**
     * @param string $id
     * @return Bible
     */
    public function get(string $id) {
        $content = $this->client->request(self::BASE_URI . sprintf(self::URI, $id))->getContent();

        return Bible::createFromArray($content['data']);
    }
}