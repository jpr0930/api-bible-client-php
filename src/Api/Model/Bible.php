<?php

namespace ApiBibleClient\Api\Model;

use ApiBibleClient\Api\Collection\AudioBibleCollection;
use ApiBibleClient\Api\Collection\CountryCollection;

/**
 * Class Bible
 * @package ApiBibleClient\Api\Model
 */
class Bible {
    /** @var string */
    private $id;
    /** @var string */
    private $dblId;
    /** @var string */
    private $abbreviation;
    /** @var string */
    private $abbreviationLocal;
    /** @var string|null */
    private $copyright;
    /** @var Language */
    private $language;
    /** @var CountryCollection */
    private $countries;
    /** @var string */
    private $name;
    /** @var string */
    private $nameLocal;
    /** @var string|null */
    private $script;
    /** @var string|null */
    private $scriptDirection;
    /** @var string|null */
    private $info;
    /** @var string */
    private $type;
    /** @var string */
    private $updatedAt;
    /** @var string|null */
    private $relatedDbl;
    /** @var AudioBibleCollection */
    private $audioBibles;

    /**
     * Bible constructor.
     * @param string               $id
     * @param string               $dblId
     * @param string               $abbreviation
     * @param string               $abbreviationLocal
     * @param string|null          $copyright
     * @param Language             $language
     * @param CountryCollection    $countries
     * @param string               $name
     * @param string               $nameLocal
     * @param string|null          $script
     * @param string|null          $scriptDirection
     * @param string|null          $info
     * @param string               $type
     * @param string               $updatedAt
     * @param string|null          $relatedDbl
     * @param AudioBibleCollection $audioBibles
     */
    public function __construct(
        string $id,
        string $dblId,
        string $abbreviation,
        string $abbreviationLocal,
        ?string $copyright,
        Language $language,
        CountryCollection $countries,
        string $name,
        string $nameLocal,
        ?string $script,
        ?string $scriptDirection,
        ?string $info,
        string $type,
        string $updatedAt,
        ?string $relatedDbl,
        AudioBibleCollection $audioBibles
    ) {
        $this->id                = $id;
        $this->dblId             = $dblId;
        $this->abbreviation      = $abbreviation;
        $this->abbreviationLocal = $abbreviationLocal;
        $this->copyright         = $copyright;
        $this->language          = $language;
        $this->countries         = $countries;
        $this->name              = $name;
        $this->nameLocal         = $nameLocal;
        $this->script            = $script;
        $this->scriptDirection   = $scriptDirection;
        $this->info              = $info;
        $this->type              = $type;
        $this->updatedAt         = $updatedAt;
        $this->relatedDbl        = $relatedDbl;
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
            $bibleData['copyright'],
            Language::createFromArray($bibleData['language']),
            CountryCollection::createFromArray($bibleData['countries']),
            $bibleData['name'],
            $bibleData['nameLocal'],
            $bibleData['script'],
            $bibleData['scriptDirection'],
            $bibleData['info'],
            $bibleData['type'],
            $bibleData['updatedAt'],
            $bibleData['relatedDbl'],
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
     * @return string|null
     */
    public function getCopyright(): ?string {
        return $this->copyright;
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
    public function getScript(): ?string {
        return $this->script;
    }

    /**
     * @return string|null
     */
    public function getScriptDirection(): ?string {
        return $this->scriptDirection;
    }

    /**
     * @return string|null
     */
    public function getInfo(): ?string {
        return $this->info;
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
     * @return string|null
     */
    public function getRelatedDbl(): ?string {
        return $this->relatedDbl;
    }

    /**
     * @return AudioBibleCollection
     */
    public function getAudioBibles(): AudioBibleCollection {
        return $this->audioBibles;
    }

}