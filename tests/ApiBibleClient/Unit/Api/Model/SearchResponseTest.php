<?php

namespace ApiBibleClient\Unit\Api\Model;

use ApiBibleClient\Api\Collection\PassageCollection;
use ApiBibleClient\Api\Collection\VerseSearchCollection;
use ApiBibleClient\Api\Model\SearchResponse;
use PHPUnit\Framework\TestCase;

class SearchResponseTest extends TestCase {

    public function testCreateFromArray() {
        $searchResponse = SearchResponse::createFromArray(
            [
                'query'    => 'A town built on a hill cannot be hidden.',
                'limit'    => 10,
                'offset'   => 0,
                'total'    => 1,
                'verses'   => [],
                'passages' => [],
            ]
        );

        $this->assertInstanceOf(SearchResponse::class, $searchResponse);
        $this->assertEquals('A town built on a hill cannot be hidden.', $searchResponse->getQuery());
        $this->assertEquals(10, $searchResponse->getLimit());
        $this->assertEquals(0, $searchResponse->getOffset());
        $this->assertEquals(1, $searchResponse->getTotal());
        $this->assertInstanceOf(VerseSearchCollection::class, $searchResponse->getVerses());
        $this->assertInstanceOf(PassageCollection::class, $searchResponse->getPassages());
    }

}
