<?php

namespace ApiBibleClient\Api\Model;

use ApiBibleClient\Api\Collection\ChapterSummaryCollection;

/**
 * Class Book
 * @package ApiBibleClient\Api\Model
 */
class Book {

    /** @var string */
    private $id;
    /** @var string */
    private $bibleId;
    /** @var string */
    private $abbreviation;
    /** @var string */
    private $name;
    /** @var string */
    private $nameLong;
    /** @var ChapterSummaryCollection */
    private $chapters;

    /**
     * Book constructor.
     * @param string                   $id
     * @param string                   $bibleId
     * @param string                   $abbreviation
     * @param string                   $name
     * @param string                   $nameLong
     * @param ChapterSummaryCollection $chapters
     */
    public function __construct(
        string $id,
        string $bibleId,
        string $abbreviation,
        string $name,
        string $nameLong,
        ChapterSummaryCollection $chapters
    ) {
        $this->id           = $id;
        $this->bibleId      = $bibleId;
        $this->abbreviation = $abbreviation;
        $this->name         = $name;
        $this->nameLong     = $nameLong;
        $this->chapters     = $chapters;
    }

    /**
     * @param array $bookData
     * @return static
     */
    public static function createFromArray(array $bookData): self {
        return new static(
            $bookData['id'],
            $bookData['bibleId'],
            $bookData['abbreviation'],
            $bookData['name'],
            $bookData['nameLong'],
            ChapterSummaryCollection::createFromArray($bookData['chapters'] ?? []),
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
    public function getBibleId(): string {
        return $this->bibleId;
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
    public function getName(): string {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getNameLong(): string {
        return $this->nameLong;
    }

    /**
     * @return ChapterSummaryCollection
     */
    public function getChapters(): ChapterSummaryCollection {
        return $this->chapters;
    }

}