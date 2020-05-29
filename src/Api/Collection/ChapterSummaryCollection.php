<?php

namespace ApiBibleClient\Api\Collection;

use ApiBibleClient\Api\Model\ChapterSummary;

/**
 * Class ChapterSummaryCollection
 * @package ApiBibleClient\Api\Collection
 */
class ChapterSummaryCollection extends CollectionBase {
    /**
     * ChapterSummaryCollection constructor.
     * @param array|iterable $values
     */
    public function __construct(iterable $values = []) {
        parent::__construct(ChapterSummary::class, $values);
    }

    /**
     * @param array $chaptersData
     * @return ChapterSummaryCollection
     */
    public static function createFromArray(array $chaptersData) {
        $collection = [];

        foreach ($chaptersData as $chapter) {
            $collection[] = ChapterSummary::createFromArray($chapter);
        }

        return new self ($collection);
    }
}