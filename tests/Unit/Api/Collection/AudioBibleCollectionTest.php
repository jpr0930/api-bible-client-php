<?php

namespace ApiBibleClient\Api\Collection;

use PHPUnit\Framework\TestCase;

class AudioBibleCollectionTest extends TestCase {

    public function testCreateFromArray() {
        $collection = AudioBibleCollection::createFromArray(
            [
                [
                    'id'               => '24b434',
                    'name'             => 'test',
                    'nameLocal'        => 'testLocal',
                    'description'      => 'Audio bible',
                    'descriptionLocal' => 'Audio bible local',
                ],
                [
                    'id'               => '32edr',
                    'name'             => 'test2',
                    'nameLocal'        => 'test2Local',
                    'description'      => 'Audio bible 2',
                    'descriptionLocal' => 'Audio bible 2 local',
                ]
            ]
        );

        $this->assertInstanceOf(AudioBibleCollection::class, $collection);
        $this->assertCount(2, $collection);
    }
}
