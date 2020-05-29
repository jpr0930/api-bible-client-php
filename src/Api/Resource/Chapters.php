<?php

namespace ApiBibleClient\Api\Resource;

use ApiBibleClient\Api\Collection\ChapterSummaryCollection;
use ApiBibleClient\Api\Model\ChapterSummary;

/**
 * Class Chapters
 * @package ApiBibleClient\Api\Resource
 */
class Chapters extends ResourceBase {

    /**
     *
     */
    public const URI_ALL = '/bibles/%s/books/%s/chapters';
    public const URI_GET = '/bibles/%s/chapters/%s';


    /**
     * @param string $bibleId
     * @param string $bookId
     * @return ChapterSummaryCollection
     */
    public function all(string $bibleId, string $bookId) {
        $content = $this->client->request(self::BASE_URI . sprintf(self::URI_ALL, $bibleId, $bookId))->getContent();

        return ChapterSummaryCollection::createFromArray($content['data']);
    }

    /**
     * @param string $bibleId
     * @param string $chapterId
     * @return ChapterSummary
     */
    public function get(string $bibleId, string $chapterId) {
        $content = $this->client->request(self::BASE_URI . sprintf(self::URI_GET, $bibleId, $chapterId))->getContent();

        return ChapterSummary::createFromArray($content['data']);
    }
}