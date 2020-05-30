<?php

namespace ApiBibleClient\Api\Resource;

use ApiBibleClient\Api\Collection\BibleSummaryCollection;
use ApiBibleClient\Api\Collection\BookCollection;
use ApiBibleClient\Api\Collection\ChapterSummaryCollection;
use ApiBibleClient\Api\Model\Bible;
use ApiBibleClient\Api\Model\Book;
use ApiBibleClient\Api\Model\Chapter;
use ApiBibleClient\Api\Model\Passage;

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
     *
     */
    public const URI_ALL_BOOKS = '/bibles/%s/books';
    /**
     *
     */
    public const URI_GET_BOOK = '/bibles/%s/books/%s';
    /**
     *
     */
    public const URI_ALL_CHAPTERS = '/bibles/%s/books/%s/chapters';
    /**
     *
     */
    public const URI_GET_CHAPTER = '/bibles/%s/chapters/%s';    /**
     *
     */
    public const URI_GET_PASSAGE = '/bibles/%s/passages/%s';

    /**
     * @param array $params
     * @return BibleSummaryCollection
     */
    public function all(array $params = []): BibleSummaryCollection {
        $content = $this->client->request(self::BASE_URI . self::URI, $params)->getContent();

        return BibleSummaryCollection::createFromArray($content['data']);
    }

    /**
     * @param string $bibleId
     * @param array  $params
     * @return BookCollection
     */
    public function allBooks(string $bibleId, array $params = []): BookCollection {
        $content = $this->client->request(self::BASE_URI . sprintf(self::URI_ALL_BOOKS, $bibleId), $params)->getContent();

        return BookCollection::createFromArray($content['data']);
    }

    /**
     * @param string $bibleId
     * @param string $bookId
     * @return ChapterSummaryCollection
     */
    public function allChapters(string $bibleId, string $bookId): ChapterSummaryCollection {
        $content = $this->client->request(self::BASE_URI . sprintf(self::URI_ALL_CHAPTERS, $bibleId, $bookId))->getContent();

        return ChapterSummaryCollection::createFromArray($content['data']);
    }

    /**
     * @param string $id
     * @return Bible
     */
    public function get(string $id): Bible {
        $content = $this->client->request(self::BASE_URI . self::URI . "/{$id}")->getContent();

        return Bible::createFromArray($content['data']);
    }

    /**
     * @param string $bibleId
     * @param string $bookId
     * @param array  $params
     * @return Book
     */
    public function getBook(string $bibleId, string $bookId, array $params = []): Book {
        $content = $this->client
            ->request(self::BASE_URI . sprintf(self::URI_GET_BOOK, $bibleId, $bookId), $params)
            ->getContent();

        return Book::createFromArray($content['data']);
    }

    /**
     * @param string $bibleId
     * @param string $chapterId
     * @param array  $params
     * @return Chapter
     */
    public function getChapter(string $bibleId, string $chapterId, array $params = []): Chapter {
        $content = $this->client->request(self::BASE_URI . sprintf(self::URI_GET_CHAPTER, $bibleId, $chapterId), $params)->getContent();

        return Chapter::createFromArray($content['data']);
    }

    /**
     * @param string $bibleId
     * @param string $passageId
     * @param array  $params
     * @return Passage
     */
    public function getPassage(string $bibleId, string $passageId, array $params = []): Passage {
        $content = $this->client->request(self::BASE_URI . sprintf(self::URI_GET_PASSAGE, $bibleId, $passageId), $params)->getContent();

        return Passage::createFromArray($content['data']);
    }

}