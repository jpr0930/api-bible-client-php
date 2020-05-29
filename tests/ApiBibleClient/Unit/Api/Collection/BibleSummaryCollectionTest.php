<?php

namespace ApiBibleClient\Unit\Api\Collection;

use ApiBibleClient\Api\Collection\BibleSummaryCollection;
use PHPUnit\Framework\TestCase;

class BibleSummaryCollectionTest extends TestCase {

    public function testCreateFromArray() {
        $collection = BibleSummaryCollection::createFromArray(
            [
                [
                    'id'                => '24b434',
                    'dblId'             => 'dbl24b434',
                    'abbreviation'      => 'abbr',
                    'abbreviationLocal' => 'abbr_local',
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
                    'description'       => 'Latin',
                    'descriptionLocal'  => 'LTR',
                    'relatedDbl'        => 'dbl',
                    'type'              => 'text',
                    'updatedAt'         => '2020-02-25T01:39:58.000Z',
                    'audioBibles'       => [],
                ]
            ]
        );

        $this->assertInstanceOf(BibleSummaryCollection::class, $collection);
        $this->assertCount(1, $collection);
    }
}
