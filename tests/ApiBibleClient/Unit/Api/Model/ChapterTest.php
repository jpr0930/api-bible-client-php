<?php

namespace ApiBibleClient\Unit\Api\Model;

use ApiBibleClient\Api\Model\Chapter;
use PHPUnit\Framework\TestCase;

class ChapterTest extends TestCase {

    public function testCreateFromArray() {
        $chapter = Chapter::createFromArray(
            [
                'id'        => '24b434',
                'bibleId'   => 'bible_id',
                'number'    => '100',
                'bookId'    => 'book_id',
                'reference' => 'ref',
                'content'   => 'some content',
                'next'      => ['next'],
                'previous'  => ['previous'],
                'copyright' => 'yes',
                'meta'      => ['meta'],
            ]
        );

        $this->assertInstanceOf(Chapter::class, $chapter);
        $this->assertEquals('24b434', $chapter->getId());
        $this->assertEquals('bible_id', $chapter->getBibleId());
        $this->assertEquals('100', $chapter->getNumber());
        $this->assertEquals('book_id', $chapter->getBookId());
        $this->assertEquals('ref', $chapter->getReference());
        $this->assertEquals('some content', $chapter->getContent());
        $this->assertEquals(['next'], $chapter->getNext());
        $this->assertEquals(['previous'], $chapter->getPrevious());
        $this->assertEquals('yes', $chapter->getCopyright());
        $this->assertEquals(['meta'], $chapter->getMeta());
    }

}
