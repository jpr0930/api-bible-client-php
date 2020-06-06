<?php

namespace ApiBibleClient\Unit\Api\Collection;

use ApiBibleClient\Api\Collection\VerseSummaryCollection;
use PHPUnit\Framework\TestCase;

class VerseSummaryCollectionTest extends TestCase {

    public function testCreateFromArray() {
        $collection = VerseSummaryCollection::createFromArray(
            [
                [
                    'id'        => '24b434',
                    'orgId'     => 'org1',
                    'bibleId'   => '1236f',
                    'chapterId' => '1',
                    'bookId'    => 'Mrk',
                    'reference' => 'ref_1'
                ],
                [
                    'id'        => '34b678',
                    'orgId'     => 'org2',
                    'bibleId'   => '9876d',
                    'chapterId' => '1',
                    'bookId'    => 'Mrk',
                    'reference' => 'ref_2'
                ],
            ]
        );

        $this->assertInstanceOf(VerseSummaryCollection::class, $collection);
        $this->assertCount(2, $collection);
    }
}
