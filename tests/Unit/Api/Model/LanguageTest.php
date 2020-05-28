<?php

namespace ApiBibleClient\Api\Model;

use PHPUnit\Framework\TestCase;

class LanguageTest extends TestCase {

    public function testCreateFromArray() {
        $language = Language::createFromArray(
            [
                'id'              => '24b434',
                'name'            => 'test',
                'nameLocal'       => 'testLocal',
                'script'          => 'Latin',
                'scriptDirection' => 'LTR',
            ]
        );

        $this->assertInstanceOf(Language::class, $language);
        $this->assertEquals('24b434', $language->getId());
        $this->assertEquals('test', $language->getName());
        $this->assertEquals('testLocal', $language->getNameLocal());
        $this->assertEquals('Latin', $language->getScript());
        $this->assertEquals('LTR', $language->getScriptDirection());
    }

}
