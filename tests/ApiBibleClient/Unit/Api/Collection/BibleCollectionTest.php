<?php

namespace ApiBibleClient\Unit\Api\Collection;

use ApiBibleClient\Api\Collection\BibleCollection;
use PHPUnit\Framework\TestCase;

class BibleCollectionTest extends TestCase {

    public function testCreateFromArray() {
        $collection = BibleCollection::createFromArray(
            [
                [
                    'id'                => '24b434',
                    'dblId'             => 'dbl24b434',
                    'abbreviation'      => 'abbr',
                    'abbreviationLocal' => 'abbr_local',
                    'copyright'         => null,
                    'language'          => [
                        'id'              => '22',
                        'name'            => 'English',
                        'nameLocal'       => 'Eng',
                        'script'          => 'Latin',
                        'scriptDirection' => 'LTR'
                    ],
                    'countries'         => [],
                    'name'              => 'ESV',
                    'nameLocal'         => 'ESV_local',
                    'script'            => 'Latin',
                    'scriptDirection'   => 'LTR',
                    'info'              => 'ESV translation',
                    'type'              => 'text',
                    'updatedAt'         => '2020-02-25T01:39:58.000Z',
                    'relatedDbl'        => null,
                    'audioBibles'       => [],
                ]
            ]
        );

        $this->assertInstanceOf(BibleCollection::class, $collection);
        $this->assertCount(1, $collection);
    }
}
