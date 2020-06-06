<?php

namespace ApiBibleClient\Unit\Api\Model;

use ApiBibleClient\Api\Collection\ChapterSummaryCollection;
use ApiBibleClient\Api\Model\Book;
use PHPUnit\Framework\TestCase;

class BookTest extends TestCase {

    public function testCreateFromArray() {
        $book = Book::createFromArray(
            [
                'id'           => '24b434',
                'bibleId'      => 'bible_id',
                'abbreviation' => 'abbr',
                'name'         => 'MRK',
                'nameLong'     => 'MARK',
                'chapters'     => [],
            ]
        );

        $this->assertInstanceOf(Book::class, $book);
        $this->assertEquals('24b434', $book->getId());
        $this->assertEquals('bible_id', $book->getBibleId());
        $this->assertEquals('abbr', $book->getAbbreviation());
        $this->assertEquals('MRK', $book->getName());
        $this->assertEquals('MARK', $book->getNameLong());
        $this->assertInstanceOf(ChapterSummaryCollection::class, $book->getChapters());
    }

}
