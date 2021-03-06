<?php

namespace ApiBibleClient\Api\Model;

/**
 * Class Chapter
 * @package ApiBibleClient\Api\Model
 */
final class Chapter extends ChapterSummary {

    /** @var string */
    private $content;
    /** @var array|null */
    private $next;
    /** @var array|null */
    private $previous;
    /** @var string */
    private $copyright;
    /** @var array|null */
    private $meta;

    /**
     * Chapter constructor.
     * @param string      $id
     * @param string      $bibleId
     * @param string      $number
     * @param string      $bookId
     * @param string|null $reference
     * @param string      $content
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
        string $content,
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

        $this->content   = $content;
        $this->next      = $next;
        $this->previous  = $previous;
        $this->copyright = $copyright;
        $this->meta      = $meta;

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
            $chapterData['content'],
            $chapterData['next'],
            $chapterData['previous'],
            $chapterData['copyright'],
            $chapterData['meta'],
        );
    }

    /**
     * @return string
     */
    public function getContent(): string {
        return $this->content;
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