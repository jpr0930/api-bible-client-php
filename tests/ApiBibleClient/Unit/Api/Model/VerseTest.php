<?php

namespace ApiBibleClient\Unit\Api\Model;

use ApiBibleClient\Api\Model\Verse;
use PHPUnit\Framework\TestCase;

class VerseTest extends TestCase {

    public function testCreateFromArray() {
        $verse = Verse::createFromArray(
            [
                'id'        => '24b434',
                'bibleId'   => 'bible_id',
                'orgId'     => 'org_id',
                'bookId'    => 'book_id',
                'chapterId' => 'chapter_id',
                'reference' => 'ref',
                'content'   => 'some content',
                'copyright' => 'yes',
                'next'      => ['next'],
                'previous'  => ['previous'],
            ]
        );

        $this->assertInstanceOf(Verse::class, $verse);
        $this->assertEquals('24b434', $verse->getId());
        $this->assertEquals('bible_id', $verse->getBibleId());
        $this->assertEquals('org_id', $verse->getOrgId());
        $this->assertEquals('book_id', $verse->getBookId());
        $this->assertEquals('chapter_id', $verse->getChapterId());
        $this->assertEquals('ref', $verse->getReference());
        $this->assertEquals('some content', $verse->getContent());
        $this->assertEquals('yes', $verse->getCopyright());
        $this->assertEquals(['next'], $verse->getNext());
        $this->assertEquals(['previous'], $verse->getPrevious());
    }

}
