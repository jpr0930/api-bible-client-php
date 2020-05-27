<?php


namespace ApiBibleClient\Api\Collection;


use ApiBibleClient\Api\Model\AudioBible;

class AudioBibleCollection extends CollectionBase {
    public function __construct(iterable $values = []) {
        parent::__construct(AudioBible::class, $values);
    }

    public static function createFromArray(array $countriesData) {
        $collection = [];

        foreach ($countriesData as $country) {
            $collection[] = AudioBible::createFromArray($country);
        }

        return new self ($collection);
    }
}