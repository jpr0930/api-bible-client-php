<?php

namespace ApiBibleClient\Api\Model;

/**
 * Class Chapter
 * @package ApiBibleClient\Api\Model
 */
final class Chapter extends ChapterSummary {

    /** @var string */
    private $content;
    /** @var array */
    private $next;
    /** @var array */
    private $previous;
    /** @var string */
    private $copyright;

    /**
     * Chapter constructor.
     * @param string      $id
     * @param string      $bibleId
     * @param string      $number
     * @param string      $bookId
     * @param string|null $reference
     * @param string      $content
     * @param array       $next
     * @param array       $previous
     * @param string      $copyright
     */
    public function __construct(
        string $id,
        string $bibleId,
        string $number,
        string $bookId,
        ?string $reference,
        string $content,
        array $next,
        array $previous,
        string $copyright
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
        );
    }

}