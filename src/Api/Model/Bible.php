<?php

namespace ApiBibleClient\Api\Model;

use ApiBibleClient\Api\Collection\AudioBibleCollection;
use ApiBibleClient\Api\Collection\CountryCollection;

/**
 * Class Bible
 * @package ApiBibleClient\Api\Model
 */
final class Bible extends BibleSummary {
    /** @var string|null */
    private $copyright;
    /** @var string|null */
    private $info;

    /**
     * Bible constructor.
     * @param string               $id
     * @param string               $dblId
     * @param string               $abbreviation
     * @param string               $abbreviationLocal
     * @param string               $copyright
     * @param Language             $language
     * @param CountryCollection    $countries
     * @param string               $name
     * @param string               $nameLocal
     * @param string|null          $description
     * @param string|null          $descriptionLocal
     * @param string|null          $info
     * @param string|null          $relatedDbl
     * @param string               $type
     * @param string               $updatedAt
     * @param AudioBibleCollection $audioBibles
     */
    public function __construct(
        string $id,
        string $dblId,
        string $abbreviation,
        string $abbreviationLocal,
        string $copyright,
        Language $language,
        CountryCollection $countries,
        string $name,
        string $nameLocal,
        ?string $description,
        ?string $descriptionLocal,
        ?string $info,
        ?string $relatedDbl,
        string $type,
        string $updatedAt,
        AudioBibleCollection $audioBibles
    ) {
        parent::__construct(
            $id,
            $dblId,
            $abbreviation,
            $abbreviationLocal,
            $language,
            $countries,
            $name,
            $nameLocal,
            $description,
            $descriptionLocal,
            $relatedDbl,
            $type,
            $updatedAt,
            $audioBibles
        );
        $this->copyright = $copyright;
        $this->info      = $info;
    }

    /**
     * @param array $bibleData
     * @return static
     */
    public static function createFromArray(array $bibleData): self {
        return new static(
            $bibleData['id'],
            $bibleData['dblId'],
            $bibleData['abbreviation'],
            $bibleData['abbreviationLocal'],
            $bibleData['copyright'],
            Language::createFromArray($bibleData['language']),
            CountryCollection::createFromArray($bibleData['countries']),
            $bibleData['name'],
            $bibleData['nameLocal'],
            $bibleData['description'],
            $bibleData['descriptionLocal'],
            $bibleData['info'],
            $bibleData['relatedDbl'],
            $bibleData['type'],
            $bibleData['updatedAt'],
            AudioBibleCollection::createFromArray($bibleData['audioBibles'] ?? []),
        );
    }

    /**
     * @return string
     */
    public function getCopyright(): string {
        return $this->copyright;
    }

    /**
     * @return string|null
     */
    public function getInfo(): ?string {
        return $this->info;
    }


}