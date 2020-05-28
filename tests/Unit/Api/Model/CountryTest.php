<?php

namespace ApiBibleClient\Api\Model;

use PHPUnit\Framework\TestCase;

class CountryTest extends TestCase {

    public function testCreateFromArray() {
        $country = Country::createFromArray(
            [
                'id'        => '24b434',
                'name'      => 'test',
                'nameLocal' => 'testLocal',
            ]
        );

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals('24b434', $country->getId());
        $this->assertEquals('test', $country->getName());
        $this->assertEquals('testLocal', $country->getNameLocal());
    }

}
