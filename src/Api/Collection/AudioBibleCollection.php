<?php

namespace ApiBibleClient\Api\Collection;

use ApiBibleClient\Api\Model\AudioBible;

/**
 * Class AudioBibleCollection
 * @package ApiBibleClient\Api\Collection
 */
class AudioBibleCollection extends CollectionBase {
    /**
     * AudioBibleCollection constructor.
     * @param array|iterable $values
     */
    public function __construct(iterable $values = []) {
        parent::__construct(AudioBible::class, $values);
    }

    /**
     * @param array $audioBiblesData
     * @return AudioBibleCollection
     */
    public static function createFromArray(array $audioBiblesData) {
        $collection = [];

        foreach ($audioBiblesData as $audioBible) {
            $collection[] = AudioBible::createFromArray($audioBible);
        }

        return new self ($collection);
    }
}