<?php

namespace ApiBibleClient\Unit\Api\Model;

use ApiBibleClient\Api\Model\ChapterSummary;
use PHPUnit\Framework\TestCase;

class ChapterSummaryTest extends TestCase {

    public function testCreateFromArray() {
        $chapterSummary = ChapterSummary::createFromArray(
            [
                'id'        => '24b434',
                'bibleId'   => 'bible_id',
                'number'    => '100',
                'bookId'    => 'book_id',
                'reference' => 'ref',
            ]
        );

        $this->assertInstanceOf(ChapterSummary::class, $chapterSummary);
        $this->assertEquals('24b434', $chapterSummary->getId());
        $this->assertEquals('bible_id', $chapterSummary->getBibleId());
        $this->assertEquals('100', $chapterSummary->getNumber());
        $this->assertEquals('book_id', $chapterSummary->getBookId());
        $this->assertEquals('ref', $chapterSummary->getReference());
    }

}
