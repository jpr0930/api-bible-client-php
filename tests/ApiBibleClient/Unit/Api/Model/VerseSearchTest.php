<?php

namespace ApiBibleClient\Unit\Api\Model;

use ApiBibleClient\Api\Model\VerseSearch;
use PHPUnit\Framework\TestCase;

class VerseSearchTest extends TestCase {

    public function testCreateFromArray() {
        $verseSearch = VerseSearch::createFromArray(
            [
                'id'        => '24b434',
                'bibleId'   => 'bible_id',
                'orgId'     => 'org_id',
                'bookId'    => 'book_id',
                'chapterId' => 'chapter_id',
                'reference' => 'ref',
                'text'      => 'some text',
            ]
        );

        $this->assertInstanceOf(VerseSearch::class, $verseSearch);
        $this->assertEquals('24b434', $verseSearch->getId());
        $this->assertEquals('bible_id', $verseSearch->getBibleId());
        $this->assertEquals('org_id', $verseSearch->getOrgId());
        $this->assertEquals('book_id', $verseSearch->getBookId());
        $this->assertEquals('chapter_id', $verseSearch->getChapterId());
        $this->assertEquals('ref', $verseSearch->getReference());
        $this->assertEquals('some text', $verseSearch->getText());
    }

}
