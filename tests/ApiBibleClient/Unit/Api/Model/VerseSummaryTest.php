<?php

namespace ApiBibleClient\Unit\Api\Model;

use ApiBibleClient\Api\Model\VerseSummary;
use PHPUnit\Framework\TestCase;

class VerseSummaryTest extends TestCase {

    public function testCreateFromArray() {
        $verseSummary = VerseSummary::createFromArray(
            [
                'id'        => '24b434',
                'bibleId'   => 'bible_id',
                'orgId'     => 'org_id',
                'bookId'    => 'book_id',
                'chapterId' => 'chapter_id',
                'reference' => 'ref',
            ]
        );

        $this->assertInstanceOf(VerseSummary::class, $verseSummary);
        $this->assertEquals('24b434', $verseSummary->getId());
        $this->assertEquals('bible_id', $verseSummary->getBibleId());
        $this->assertEquals('org_id', $verseSummary->getOrgId());
        $this->assertEquals('book_id', $verseSummary->getBookId());
        $this->assertEquals('chapter_id', $verseSummary->getChapterId());
        $this->assertEquals('ref', $verseSummary->getReference());
    }

}
