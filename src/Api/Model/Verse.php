<?php

namespace ApiBibleClient\Api\Model;

/**
 * Class Verse
 * @package ApiBibleClient\Api\Model
 */
final class Verse extends VerseSummary {

    /** @var string */
    private $content;
    /** @var string */
    private $copyright;
    /** @var array|null */
    private $next;
    /** @var array|null */
    private $previous;

    /**
     * Verse constructor.
     * @param string      $id
     * @param string      $orgId
     * @param string      $bibleId
     * @param string      $bookId
     * @param string      $chapterId
     * @param string|null $reference
     * @param string      $content
     * @param string      $copyright
     * @param array|null  $next
     * @param array|null  $previous
     */
    public function __construct(
        string $id,
        string $orgId,
        string $bibleId,
        string $chapterId,
        string $bookId,
        ?string $reference,
        string $content,
        string $copyright,
        ?array $next,
        ?array $previous
    ) {
        parent::__construct($id, $orgId, $bibleId, $bookId, $chapterId, $reference);

        $this->content   = $content;
        $this->copyright = $copyright;
        $this->next      = $next;
        $this->previous  = $previous;
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
            $verseData['content'],
            $verseData['copyright'],
            $verseData['next'],
            $verseData['previous'],
        );
    }

    /**
     * @return string
     */
    public function getContent(): string {
        return $this->content;
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
    public function getNext(): ?array {
        return $this->next;
    }

    /**
     * @return array|null
     */
    public function getPrevious(): ?array {
        return $this->previous;
    }

}