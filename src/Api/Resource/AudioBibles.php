<?php

namespace ApiBibleClient\Api\Resource;

use ApiBibleClient\Api\Collection\BibleSummaryCollection;
use ApiBibleClient\Api\Collection\BookCollection;
use ApiBibleClient\Api\Collection\ChapterSummaryCollection;
use ApiBibleClient\Api\Model\AudioBible;
use ApiBibleClient\Api\Model\AudioChapter;
use ApiBibleClient\Api\Model\Book;
use ApiBibleClient\Api\Model\ChapterSummary;

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
     *
     */
    public const URI_ALL_BOOKS = '/audio-bibles/%s/books';
    /**
     *
     */
    public const URI_GET_BOOK = '/audio-bibles/%s/books/%s';
    /**
     *
     */
    public const URI_ALL_CHAPTERS = '/audio-bibles/%s/books/%s/chapters';
    /**
     *
     */
    public const URI_GET_CHAPTER = '/audio-bibles/%s/chapters/%s';

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
     * @return AudioBible
     */
    public function get(string $id): AudioBible {
        $content = $this->client->request(self::BASE_URI . self::URI . "/{$id}")->getContent();

        return AudioBible::createFromArray($content['data']);
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
     * @return AudioChapter
     */
    public function getChapter(string $bibleId, string $chapterId): AudioChapter {
        $content = $this->client->request(self::BASE_URI . sprintf(self::URI_GET_CHAPTER, $bibleId, $chapterId))->getContent();

        return AudioChapter::createFromArray($content['data']);
    }

}