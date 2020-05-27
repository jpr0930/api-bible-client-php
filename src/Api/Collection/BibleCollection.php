<?php

namespace ApiBibleClient\Api\Collection;

use ApiBibleClient\Api\Model\Bible;

class BibleCollection extends CollectionBase {
    public function __construct(iterable $values = []) {
        parent::__construct(Bible::class, $values);
    }

    public static function createFromArray(array $countriesData) {
        $collection = [];

        foreach ($countriesData as $country) {
            $collection[] = Bible::createFromArray($country);
        }

        return new self ($collection);
    }
}