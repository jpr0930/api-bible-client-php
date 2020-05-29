<?php

namespace ApiBibleClient\Api\Model;

/**
 * Class ChapterSummary
 * @package ApiBibleClient\Api\Model
 */
class ChapterSummary {

    /** @var string */
    protected $id;
    /** @var string */
    protected $bibleId;
    /** @var string */
    protected $number;
    /** @var string */
    protected $bookId;
    /** @var string */
    protected $reference;

    /**
     * ChapterSummary constructor.
     * @param string      $id
     * @param string      $bibleId
     * @param string      $number
     * @param string      $bookId
     * @param string|null $reference
     */
    public function __construct(
        string $id,
        string $bibleId,
        string $number,
        string $bookId,
        ?string $reference
    ) {
        $this->id        = $id;
        $this->bibleId   = $bibleId;
        $this->number    = $number;
        $this->bookId    = $bookId;
        $this->reference = $reference;
    }

    public static function createFromArray(array $chapterData): self {
        return new static(
            $chapterData['id'],
            $chapterData['bibleId'],
            $chapterData['number'],
            $chapterData['bookId'],
            $chapterData['reference'],
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
    public function getNumber(): string {
        return $this->number;
    }

    /**
     * @return string
     */
    public function getBookId(): string {
        return $this->bookId;
    }

    /**
     * @return string|null
     */
    public function getReference(): ?string {
        return $this->reference;
    }
}