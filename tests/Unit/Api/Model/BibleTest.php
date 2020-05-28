<?php

namespace ApiBibleClient\Api\Model;

use ApiBibleClient\Api\Collection\AudioBibleCollection;
use ApiBibleClient\Api\Collection\CountryCollection;
use PHPUnit\Framework\TestCase;

class BibleTest extends TestCase {

    public function testCreateFromArray() {
        $bible = Bible::createFromArray(
            [
                'id'                => '24b434',
                'dblId'             => 'dbl24b434',
                'abbreviation'      => 'abbr',
                'abbreviationLocal' => 'abbr_local',
                'copyright'         => null,
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
                'script'            => 'Latin',
                'scriptDirection'   => 'LTR',
                'info'              => 'ESV translation',
                'type'              => 'text',
                'updatedAt'         => '2020-02-25T01:39:58.000Z',
                'relatedDbl'        => null,
                'audioBibles'       => [],
            ]
        );

        $this->assertInstanceOf(Bible::class, $bible);
        $this->assertEquals('24b434', $bible->getId());
        $this->assertEquals('dbl24b434', $bible->getDblId());
        $this->assertEquals('abbr', $bible->getAbbreviation());
        $this->assertEquals('abbr_local', $bible->getAbbreviationLocal());
        $this->assertNull($bible->getCopyright());
        $this->assertInstanceOf(Language::class, $bible->getLanguage());
        $this->assertInstanceOf(CountryCollection::class, $bible->getCountries());
        $this->assertEquals('ESV', $bible->getName());
        $this->assertEquals('ESV_local', $bible->getNameLocal());
        $this->assertEquals('Latin', $bible->getScript());
        $this->assertEquals('LTR', $bible->getScriptDirection());
        $this->assertEquals('ESV translation', $bible->getInfo());
        $this->assertEquals('2020-02-25T01:39:58.000Z', $bible->getUpdatedAt());
        $this->assertNull($bible->getRelatedDbl());
        $this->assertInstanceOf(AudioBibleCollection::class, $bible->getAudioBibles());
    }

}
