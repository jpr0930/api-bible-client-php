<?php

namespace ApiBibleClient\Api;

class Bible {
    private $id;
    private $dblId;
    private $abbreviation;
    private $abbreviationLocal;
    private $copyright;
    /** @var Language */
    private $language;
    private $countries;
    private $name;
    private $nameLocal;
    private $script;
    private $scriptDirection;
    private $info;
    private $type;
    private $updatedAt;
    private $relatedDbl;
    private $audioBibles;

    public function __construct(
        string $id,
        string $dblId,
        string $abbreviation,
        string $abbreviationLocal,
        string $copyright,
        string $language,
        array $countries,
        string $name,
        string $nameLocal,
        string $script,
        string $scriptDirection,
        string $info,
        string $type,
        string $updatedAt,
        string $relatedDbl,
        array $audioBibles
    ) {
        $this->id = $id;
        $this->dblId = $dblId;
        $this->abbreviation = $abbreviation;
        $this->abbreviationLocal = $abbreviationLocal;
        $this->copyright = $copyright;
        $this->language = $language;
        $this->countries = $countries;
        $this->name = $name;
        $this->nameLocal = $nameLocal;
        $this->script = $script;
        $this->scriptDirection = $scriptDirection;
        $this->info = $info;
        $this->type = $type;
        $this->updatedAt = $updatedAt;
        $this->relatedDbl = $relatedDbl;
        $this->audioBibles = $audioBibles;
    }

    public function setLanguage(array $language) {
        $this->language = Language::createFromArray($language);
    }

}