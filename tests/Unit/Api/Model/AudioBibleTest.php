<?php

namespace ApiBibleClient\Api\Model;

use PHPUnit\Framework\TestCase;

class AudioBibleTest extends TestCase {

    public function testCreateFromArray() {
        $audioBible = AudioBible::createFromArray(
            [
                'id'               => '24b434',
                'name'             => 'test',
                'nameLocal'        => 'testLocal',
                'description'      => 'Audio bible',
                'descriptionLocal' => 'Audio bible local',
            ]
        );

        $this->assertInstanceOf(AudioBible::class, $audioBible);
        $this->assertEquals('24b434', $audioBible->getId());
        $this->assertEquals('test', $audioBible->getName());
        $this->assertEquals('testLocal', $audioBible->getNameLocal());
        $this->assertEquals('Audio bible', $audioBible->getDescription());
        $this->assertEquals('Audio bible local', $audioBible->getDescriptionLocal());
    }

}
