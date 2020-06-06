<?php

namespace ApiBibleClient\Unit\Api\Model;

use ApiBibleClient\Api\Collection\AudioBibleCollection;
use ApiBibleClient\Api\Collection\CountryCollection;
use ApiBibleClient\Api\Model\BibleSummary;
use ApiBibleClient\Api\Model\Language;
use PHPUnit\Framework\TestCase;

class BibleSummaryTest extends TestCase {

    public function testCreateFromArray() {
        $bibleSummary = BibleSummary::createFromArray(
            [
                'id'                => '24b434',
                'dblId'             => 'dbl24b434',
                'abbreviation'      => 'abbr',
                'abbreviationLocal' => 'abbr_local',
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
                'description'       => 'Latin',
                'descriptionLocal'  => 'LTR',
                'relatedDbl'        => 'dbl',
                'type'              => 'text',
                'updatedAt'         => '2020-02-25T01:39:58.000Z',
                'audioBibles'       => [],
            ]
        );

        $this->assertInstanceOf(BibleSummary::class, $bibleSummary);
        $this->assertEquals('24b434', $bibleSummary->getId());
        $this->assertEquals('dbl24b434', $bibleSummary->getDblId());
        $this->assertEquals('abbr', $bibleSummary->getAbbreviation());
        $this->assertEquals('abbr_local', $bibleSummary->getAbbreviationLocal());
        $this->assertInstanceOf(Language::class, $bibleSummary->getLanguage());
        $this->assertInstanceOf(CountryCollection::class, $bibleSummary->getCountries());
        $this->assertEquals('ESV', $bibleSummary->getName());
        $this->assertEquals('ESV_local', $bibleSummary->getNameLocal());
        $this->assertEquals('Latin', $bibleSummary->getDescription());
        $this->assertEquals('LTR', $bibleSummary->getDescriptionLocal());
        $this->assertEquals('2020-02-25T01:39:58.000Z', $bibleSummary->getUpdatedAt());
        $this->assertEquals('dbl', $bibleSummary->getRelatedDbl());
        $this->assertInstanceOf(AudioBibleCollection::class, $bibleSummary->getAudioBibles());
    }

}
