<?php

namespace ApiBibleClient\Api\Resource;

use ApiBibleClient\Api\Collection\BookCollection;
use ApiBibleClient\Api\Model\Book;

/**
 * Class Books
 * @package ApiBibleClient\Api\Resource
 */
class Books extends ResourceBase {

    /**
     *
     */
    public const URI_ALL = '/bibles/%s/books';
    public const URI_GET = '/bibles/%s/books/%s';

    /**
     * @param string $bibleId
     * @param array  $params
     * @return BookCollection
     */
    public function all(string $bibleId, array $params = []) {
        $content = $this->client->request(self::BASE_URI . sprintf(self::URI_ALL, $bibleId), $params)->getContent();

        return BookCollection::createFromArray($content['data']);
    }

    public function get(string $bibleId, string $bookId, array $params = []) {
        $content = $this->client
            ->request(self::BASE_URI . sprintf(self::URI_GET, $bibleId, $bookId), $params)
            ->getContent();

        return Book::createFromArray($content['data']);
    }
}