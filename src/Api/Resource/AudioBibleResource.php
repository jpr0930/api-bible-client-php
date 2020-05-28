<?php

namespace ApiBibleClient\Api\Resource;

use ApiBibleClient\Api\Model\AudioBible;

/**
 * Class AudioBibleResource
 * @package ApiBibleClient\Api\Resource
 */
class AudioBibleResource extends ResourceBase {
    /**
     *
     */
    public const URI = '/audio-bibles/%s';


    /**
     * @return AudioBible
     */
    public function get(string $id) {
        $content = $this->client->request(self::BASE_URI . sprintf(self::URI, $id))->getContent();

        return AudioBible::createFromArray($content['data']);
    }
}