<?php

namespace ApiBibleClient\Unit\Api\Collection;

use ApiBibleClient\Api\Collection\VerseSearchCollection;
use PHPUnit\Framework\TestCase;

class VerseSearchCollectionTest extends TestCase {

    public function testCreateFromArray() {
        $collection = VerseSearchCollection::createFromArray(
            [
                [
                    'id'        => '24b434',
                    'orgId'     => 'org1',
                    'bibleId'   => '1236f',
                    'chapterId' => '1',
                    'bookId'    => 'Mrk',
                    'reference' => 'ref_1',
                    'text'      => 'some text'
                ],
                [
                    'id'        => '34b678',
                    'orgId'     => 'org2',
                    'bibleId'   => '9876d',
                    'chapterId' => '1',
                    'bookId'    => 'Mrk',
                    'reference' => 'ref_2',
                    'text'      => 'more text'
                ],
            ]
        );

        $this->assertInstanceOf(VerseSearchCollection::class, $collection);
        $this->assertCount(2, $collection);
    }
}
