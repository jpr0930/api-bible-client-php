<?php

namespace ApiBibleClient\Api\Collection;

use ApiBibleClient\Api\Model\Country;

/**
 * Class CountryCollection
 * @package ApiBibleClient\Api\Collection
 */
class CountryCollection extends CollectionBase {
    /**
     * CountryCollection constructor.
     * @param array|iterable $values
     */
    public function __construct(iterable $values = []) {
        parent::__construct(Country::class, $values);
    }

    /**
     * @param array $countriesData
     * @return CountryCollection
     */
    public static function createFromArray(array $countriesData) {
        $collection = [];

        foreach ($countriesData as $country) {
            $collection[] = Country::createFromArray($country);
        }

        return new self ($collection);
    }
}