<?php

namespace ApiBibleClient\Api\Collection;

use PHPUnit\Framework\TestCase;

class CountryCollectionTest extends TestCase {

    public function testCreateFromArray() {
        $collection = CountryCollection::createFromArray(
            [
                [
                    'id'        => '24b434',
                    'name'      => 'test',
                    'nameLocal' => 'testLocal',
                ],
                [
                    'id'        => '345erd',
                    'name'      => 'test2',
                    'nameLocal' => 'test2Local',
                ]
            ]
        );

        $this->assertInstanceOf(CountryCollection::class, $collection);
        $this->assertCount(2, $collection);
    }
}
