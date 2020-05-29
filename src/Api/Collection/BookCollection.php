<?php

namespace ApiBibleClient\Api\Collection;

use ApiBibleClient\Api\Model\Book;

/**
 * Class BookCollection
 * @package ApiBibleClient\Api\Collection
 */
class BookCollection extends CollectionBase {

    /**
     * BookCollection constructor.
     * @param array|iterable $values
     */
    public function __construct(iterable $values = []) {
        parent::__construct(Book::class, $values);
    }

    /**
     * @param array $booksData
     * @return BookCollection
     */
    public static function createFromArray(array $booksData) {
        $collection = [];

        foreach ($booksData as $book) {
            $collection[] = Book::createFromArray($book);
        }

        return new self ($collection);
    }
}