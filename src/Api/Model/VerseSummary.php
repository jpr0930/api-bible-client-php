<?php

namespace ApiBibleClient\Api\Model;

/**
 * Class VerseSummary
 * @package ApiBibleClient\Api\Model
 */
class VerseSummary {

    /** @var string */
    protected $id;
    /** @var string */
    protected $orgId;
    /** @var string */
    protected $bibleId;
    /** @var string */
    protected $bookId;
    /** @var string */
    protected $chapterId;
    /** @var string */
    protected $reference;

    /**
     * VerseSummary constructor.
     * @param string      $id
     * @param string      $orgId
     * @param string      $bibleId
     * @param string      $bookId
     * @param string      $chapterId
     * @param string|null $reference
     */
    public function __construct(
        string $id,
        string $orgId,
        string $bibleId,
        string $chapterId,
        string $bookId,
        ?string $reference
    ) {
        $this->id        = $id;
        $this->orgId     = $orgId;
        $this->bibleId   = $bibleId;
        $this->bookId    = $bookId;
        $this->chapterId = $chapterId;
        $this->reference = $reference;
    }

    /**
     * @param array $verseData
     * @return static
     */
    public static function createFromArray(array $verseData): self {
        return new static(
            $verseData['id'],
            $verseData['orgId'],
            $verseData['bibleId'],
            $verseData['chapterId'],
            $verseData['bookId'],
            $verseData['reference'],
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
    public function getOrgId(): string {
        return $this->orgId;
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
    public function getBookId(): string {
        return $this->bookId;
    }

    /**
     * @return string
     */
    public function getChapterId(): string {
        return $this->chapterId;
    }

    /**
     * @return string
     */
    public function getReference(): string {
        return $this->reference;
    }
}