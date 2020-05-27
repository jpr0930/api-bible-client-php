<?php

namespace ApiBibleClient\Api\Collection;

use ApiBibleClient\Api\Model\Bible;

/**
 * Class BibleCollection
 * @package ApiBibleClient\Api\Collection
 */
class BibleCollection extends CollectionBase {
    public function __construct(iterable $values = []) {
        parent::__construct(Bible::class, $values);
    }

    public static function createFromArray(array $biblesData) {
        $collection = [];

        foreach ($biblesData as $bible) {
            $collection[] = Bible::createFromArray($bible);
        }

        return new self ($collection);
    }
}