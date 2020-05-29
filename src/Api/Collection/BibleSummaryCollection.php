<?php

namespace ApiBibleClient\Api\Collection;

use ApiBibleClient\Api\Model\BibleSummary;

/**
 * Class BibleSummaryCollection
 * @package ApiBibleClient\Api\Collection
 */
class BibleSummaryCollection extends CollectionBase {
    /**
     * BibleSummaryCollection constructor.
     * @param array|iterable $values
     */
    public function __construct(iterable $values = []) {
        parent::__construct(BibleSummary::class, $values);
    }

    /**
     * @param array $biblesData
     * @return BibleSummaryCollection
     */
    public static function createFromArray(array $biblesData) {
        $collection = [];

        foreach ($biblesData as $bible) {
            $collection[] = BibleSummary::createFromArray($bible);
        }

        return new self ($collection);
    }
}