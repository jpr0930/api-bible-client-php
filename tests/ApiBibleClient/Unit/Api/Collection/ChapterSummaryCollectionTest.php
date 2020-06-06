<?php

namespace ApiBibleClient\Unit\Api\Collection;

use ApiBibleClient\Api\Collection\ChapterSummaryCollection;
use PHPUnit\Framework\TestCase;

class ChapterSummaryCollectionTest extends TestCase {

    public function testCreateFromArray() {
        $collection = ChapterSummaryCollection::createFromArray(
            [
                [
                    'id'        => '24b434',
                    'bibleId'   => '1236f',
                    'number'    => '1',
                    'bookId'    => 'Mrk',
                    'reference' => 'ref_1'
                ],
                [
                    'id'        => '56h567',
                    'bibleId'   => '1236f',
                    'number'    => '2',
                    'bookId'    => 'Mrk',
                    'reference' => 'ref_2'
                ],
            ]
        );

        $this->assertInstanceOf(ChapterSummaryCollection::class, $collection);
        $this->assertCount(2, $collection);
    }
}
