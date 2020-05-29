<?php

namespace ApiBibleClient\Api\Model;

use ApiBibleClient\Api\Collection\AudioBibleCollection;
use ApiBibleClient\Api\Collection\CountryCollection;

/**
 * Class BibleSummary
 * @package ApiBibleClient\Api\Model
 */
class BibleSummary {
    /** @var string */
    protected $id;
    /** @var string */
    protected $dblId;
    /** @var string */
    protected $abbreviation;
    /** @var string */
    protected $abbreviationLocal;
    /** @var Language */
    protected $language;
    /** @var CountryCollection */
    protected $countries;
    /** @var string */
    protected $name;
    /** @var string */
    protected $nameLocal;
    /** @var string|null */
    protected $description;
    /** @var string|null */
    protected $descriptionLocal;
    /** @var string|null */
    protected $relatedDbl;
    /** @var string */
    protected $type;
    /** @var string */
    protected $updatedAt;
    /** @var AudioBibleCollection */
    protected $audioBibles;

    /**
     * BibleSummary constructor.
     * @param string               $id
     * @param string               $dblId
     * @param string               $abbreviation
     * @param string               $abbreviationLocal
     * @param Language             $language
     * @param CountryCollection    $countries
     * @param string               $name
     * @param string               $nameLocal
     * @param string|null          $description
     * @param string|null          $descriptionLocal
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
        Language $language,
        CountryCollection $countries,
        string $name,
        string $nameLocal,
        ?string $description,
        ?string $descriptionLocal,
        ?string $relatedDbl,
        string $type,
        string $updatedAt,
        AudioBibleCollection $audioBibles
    ) {
        $this->id                = $id;
        $this->dblId             = $dblId;
        $this->abbreviation      = $abbreviation;
        $this->abbreviationLocal = $abbreviationLocal;
        $this->language          = $language;
        $this->countries         = $countries;
        $this->name              = $name;
        $this->nameLocal         = $nameLocal;
        $this->description       = $description;
        $this->descriptionLocal  = $descriptionLocal;
        $this->relatedDbl        = $relatedDbl;
        $this->type              = $type;
        $this->updatedAt         = $updatedAt;
        $this->audioBibles       = $audioBibles;
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
            Language::createFromArray($bibleData['language']),
            CountryCollection::createFromArray($bibleData['countries']),
            $bibleData['name'],
            $bibleData['nameLocal'],
            $bibleData['description'],
            $bibleData['descriptionLocal'],
            $bibleData['relatedDbl'],
            $bibleData['type'],
            $bibleData['updatedAt'],
            AudioBibleCollection::createFromArray($bibleData['audioBibles'] ?? []),
        );
    }

    /**
     * @return string
     */
    public function getId(): string {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDblId(): string {
        return $this->dblId;
    }

    /**
     * @return string
     */
    public function getAbbreviation(): string {
        return $this->abbreviation;
    }

    /**
     * @return string
     */
    public function getAbbreviationLocal(): string {
        return $this->abbreviationLocal;
    }

    /**
     * @return Language
     */
    public function getLanguage(): Language {
        return $this->language;
    }

    /**
     * @return CountryCollection
     */
    public function getCountries(): CountryCollection {
        return $this->countries;
    }

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getNameLocal(): string {
        return $this->nameLocal;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * @return string|null
     */
    public function getDescriptionLocal(): ?string {
        return $this->descriptionLocal;
    }

    /**
     * @return string|null
     */
    public function getRelatedDbl(): ?string {
        return $this->relatedDbl;
    }

    /**
     * @return string
     */
    public function getType(): string {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string {
        return $this->updatedAt;
    }

    /**
     * @return AudioBibleCollection
     */
    public function getAudioBibles(): AudioBibleCollection {
        return $this->audioBibles;
    }

}