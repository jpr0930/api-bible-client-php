<?php

namespace ApiBibleClient\Unit\Api\Model;

use ApiBibleClient\Api\Model\Passage;
use PHPUnit\Framework\TestCase;

class PassageTest extends TestCase {

    public function testCreateFromArray() {
        $passage = Passage::createFromArray(
            [
                'id'        => '24b434',
                'bibleId'   => 'bible_id',
                'orgId'     => 'org_id',
                'reference' => 'ref',
                'content'   => 'some content',
                'copyright' => 'yes',
            ]
        );

        $this->assertInstanceOf(Passage::class, $passage);
        $this->assertEquals('24b434', $passage->getId());
        $this->assertEquals('bible_id', $passage->getBibleId());
        $this->assertEquals('org_id', $passage->getOrgId());
        $this->assertEquals('ref', $passage->getReference());
        $this->assertEquals('some content', $passage->getContent());
        $this->assertEquals('yes', $passage->getCopyright());
    }

}
