<?php

namespace ApiBibleClient\Unit\Api\Collection;

use ApiBibleClient\Api\Collection\PassageCollection;
use PHPUnit\Framework\TestCase;

class PassageCollectionTest extends TestCase {

    public function testCreateFromArray() {
        $collection = PassageCollection::createFromArray(
            [
                [
                    'id'        => '24b434',
                    'bibleId'   => '1236f',
                    'orgId'     => 'org1',
                    'content'   => 'content_1',
                    'reference' => 'ref_1',
                    'copyright' => 'yes'
                ],
                [
                    'id'        => '34b678',
                    'bibleId'   => '273fg5',
                    'orgId'     => 'org1',
                    'content'   => 'content_2',
                    'reference' => 'ref_2',
                    'copyright' => 'yes'
                ]
            ]
        );

        $this->assertInstanceOf(PassageCollection::class, $collection);
        $this->assertCount(2, $collection);
    }
}
