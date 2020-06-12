<?php

namespace ApiBibleClient\Api\Collection;

use ApiBibleClient\Api\Model\VerseSearch;

/**
 * Class VerseSearchCollection
 * @package ApiBibleClient\Api\Collection
 */
class VerseSearchCollection extends CollectionBase {
    /**
     * VerseSearchCollection constructor.
     * @param array|iterable $values
     */
    public function __construct(iterable $values = []) {
        parent::__construct(VerseSearch::class, $values);
    }

    /**
     * @param array $versesData
     * @return VerseSearchCollection
     */
    public static function createFromArray(array $versesData) {
        $collection = [];

        foreach ($versesData as $verse) {
            $collection[] = VerseSearch::createFromArray($verse);
        }

        return new self ($collection);
    }
}