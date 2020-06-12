<?php

namespace ApiBibleClient\Api\Model;

/**
 * Class VerseSearch
 * @package ApiBibleClient\Api\Model
 */
final class VerseSearch extends VerseSummary {

    /** @var string */
    private $text;

    /**
     * VerseSummary constructor.
     * @param string      $id
     * @param string      $orgId
     * @param string      $bibleId
     * @param string      $chapterId
     * @param string      $bookId
     * @param string|null $reference
     * @param string      $text
     */
    public function __construct(
        string $id,
        string $orgId,
        string $bibleId,
        string $chapterId,
        string $bookId,
        ?string $reference,
        string $text
    ) {
        parent::__construct($id, $orgId, $bibleId, $chapterId, $bookId, $reference);

        $this->text = $text;
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
            $verseData['text'],
        );
    }

    /**
     * @return string
     */
    public function getText(): string {
        return $this->text;
    }
}