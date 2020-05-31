<?php

namespace ApiBibleClient\Api\Model;

/**
 * Class AudioChapter
 * @package ApiBibleClient\Api\Model
 */
final class AudioChapter extends ChapterSummary {

    /** @var string */
    private $resourceUrl;
    /** @var array|null */
    private $timecodes;
    /** @var int */
    private $expiresAt;
    /** @var array|null */
    private $next;
    /** @var array|null */
    private $previous;
    /** @var string */
    private $copyright;
    /** @var array|null */
    private $meta;

    /**
     * AudioChapter constructor.
     * @param string      $id
     * @param string      $bibleId
     * @param string      $number
     * @param string      $bookId
     * @param string|null $reference
     * @param string      $resourceUrl
     * @param array|null  $timecodes
     * @param int         $expiresAt
     * @param array|null  $next
     * @param array|null  $previous
     * @param string      $copyright
     * @param array|null  $meta
     */
    public function __construct(
        string $id,
        string $bibleId,
        string $number,
        string $bookId,
        ?string $reference,
        string $resourceUrl,
        ?array $timecodes,
        int $expiresAt,
        ?array $next,
        ?array $previous,
        string $copyright,
        ?array $meta
    ) {
        parent::__construct(
            $id,
            $bibleId,
            $number,
            $bookId,
            $reference
        );

        $this->resourceUrl = $resourceUrl;
        $this->timecodes   = $timecodes;
        $this->expiresAt   = $expiresAt;
        $this->next        = $next;
        $this->previous    = $previous;
        $this->copyright   = $copyright;
        $this->meta        = $meta;

    }

    /**
     * @param array $chapterData
     * @return static
     */
    public static function createFromArray(array $chapterData): self {
        return new static(
            $chapterData['id'],
            $chapterData['bibleId'],
            $chapterData['number'],
            $chapterData['bookId'],
            $chapterData['reference'],
            $chapterData['resourceUrl'],
            $chapterData['timecodes'],
            $chapterData['expiresAt'],
            $chapterData['next'],
            $chapterData['previous'],
            $chapterData['copyright'],
            $chapterData['meta'],
        );
    }

    /**
     * @return string
     */
    public function getResourceUrl(): string {
        return $this->resourceUrl;
    }

    /**
     * @return array|null
     */
    public function getTimecodes(): ?array {
        return $this->timecodes;
    }

    /**
     * @return int
     */
    public function getExpiresAt(): int {
        return $this->expiresAt;
    }

    /**
     * @return array|null
     */
    public function getNext(): ?array {
        return $this->next;
    }

    /**
     * @return array|null
     */
    public function getPrevious(): ?array {
        return $this->previous;
    }

    /**
     * @return string
     */
    public function getCopyright(): string {
        return $this->copyright;
    }

    /**
     * @return array|null
     */
    public function getMeta(): ?array {
        return $this->meta;
    }
}