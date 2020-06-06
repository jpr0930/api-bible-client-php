<?php

namespace ApiBibleClient\Unit\Api\Model;

use ApiBibleClient\Api\Model\AudioChapter;
use PHPUnit\Framework\TestCase;

class AudioChapterTest extends TestCase {

    public function testCreateFromArray() {
        $audioChapter = AudioChapter::createFromArray(
            [
                'id'          => '24b434',
                'bibleId'     => '1',
                'number'      => '1',
                'bookId'      => 'MARK',
                'reference'   => 'ref_mark',
                'resourceUrl' => 'https://resource.com/url',
                'timecodes'   => ['time' => 'codes'],
                'expiresAt'   => '197376239',
                'next'        => ['next'],
                'previous'    => ['previous'],
                'copyright'   => 'yes',
                'meta'        => null,
            ]
        );

        $this->assertInstanceOf(AudioChapter::class, $audioChapter);
        $this->assertEquals('24b434', $audioChapter->getId());
        $this->assertEquals('1', $audioChapter->getBibleId());
        $this->assertEquals('1', $audioChapter->getNumber());
        $this->assertEquals('MARK', $audioChapter->getBookId());
        $this->assertEquals('ref_mark', $audioChapter->getReference());
        $this->assertEquals('https://resource.com/url', $audioChapter->getResourceUrl());
        $this->assertEquals(['time' => 'codes'], $audioChapter->getTimecodes());
        $this->assertEquals('197376239', $audioChapter->getExpiresAt());
        $this->assertEquals(['next'], $audioChapter->getNext());
        $this->assertEquals(['previous'], $audioChapter->getPrevious());
        $this->assertEquals('yes', $audioChapter->getCopyright());
        $this->assertNull($audioChapter->getMeta());
    }

}
