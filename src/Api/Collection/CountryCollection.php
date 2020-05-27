<?php


namespace ApiBibleClient\Api\Collection;


use ApiBibleClient\Api\Model\Country;

class CountryCollection extends CollectionBase {
    public function __construct(iterable $values = []) {
        parent::__construct(Country::class, $values);
    }

    public static function createFromArray(array $countriesData) {
        $collection = [];

        foreach ($countriesData as $country) {
            $collection[] = Country::createFromArray($country);
        }

        return new self ($collection);
    }
}