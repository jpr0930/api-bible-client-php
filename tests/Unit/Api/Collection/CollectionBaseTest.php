<?php

namespace ApiBibleClient\Api\Collection;

use PHPUnit\Framework\TestCase;

class CollectionBaseTest extends TestCase {

    public function testBasicFunctionality() {
        $collection = new CollectionBase('\stdClass', [ new \stdClass() ]);

        $collection[] = new \stdClass();

        $this->assertCount(2, $collection);
        $this->assertArrayHasKey(0, $collection);
        $this->assertArrayHasKey(1, $collection);
        $this->assertInstanceOf(\stdClass::class, $collection[0]);
        $this->assertInstanceOf(\stdClass::class, $collection[1]);
        $this->assertNotEquals(spl_object_hash($collection[0]), spl_object_hash($collection[1]));
    }

    public function testEnforceType() {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Only objects of type \'\DateTime\' are accepted');

        $collection = new CollectionBase('\DateTime', [ new \stdClass() ]);
    }
}
