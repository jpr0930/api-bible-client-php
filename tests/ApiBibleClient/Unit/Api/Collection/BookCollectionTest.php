<?php

namespace ApiBibleClient\Unit\Api\Collection;

use ApiBibleClient\Api\Collection\BookCollection;
use PHPUnit\Framework\TestCase;

class BookCollectionTest extends TestCase {

    public function testCreateFromArray() {
        $collection = BookCollection::createFromArray(
            [
                [
                    'id'           => '24b434',
                    'bibleId'      => '1236f',
                    'abbreviation' => 'bktest',
                    'name'         => 'Mrk',
                    'nameLong'     => 'Mark',
                    'chapters'     => [],
                ],
                [
                    'id'           => '275h5',
                    'bibleId'      => '1236f',
                    'abbreviation' => 'bktest2',
                    'name'         => 'Lk',
                    'nameLong'     => 'Luke',
                ],
            ]
        );

        $this->assertInstanceOf(BookCollection::class, $collection);
        $this->assertCount(2, $collection);
    }
}
