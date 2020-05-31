<?php

namespace ApiBibleClient\Api\Collection;

use ApiBibleClient\Api\Model\VerseSummary;

/**
 * Class VerseSummaryCollection
 * @package ApiBibleClient\Api\Collection
 */
class VerseSummaryCollection extends CollectionBase {
    /**
     * VerseSummaryCollection constructor.
     * @param array|iterable $values
     */
    public function __construct(iterable $values = []) {
        parent::__construct(VerseSummary::class, $values);
    }

    /**
     * @param array $versesData
     * @return VerseSummaryCollection
     */
    public static function createFromArray(array $versesData) {
        $collection = [];

        foreach ($versesData as $verse) {
            $collection[] = VerseSummary::createFromArray($verse);
        }

        return new self ($collection);
    }
}