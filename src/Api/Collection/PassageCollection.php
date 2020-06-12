<?php

namespace ApiBibleClient\Api\Collection;

use ApiBibleClient\Api\Model\Passage;

/**
 * Class PassageCollection
 * @package ApiBibleClient\Api\Collection
 */
class PassageCollection extends CollectionBase {
    /**
     * PassageCollection constructor.
     * @param array|iterable $values
     */
    public function __construct(iterable $values = []) {
        parent::__construct(Passage::class, $values);
    }

    /**
     * @param array $passagesData
     * @return PassageCollection
     */
    public static function createFromArray(array $passagesData) {
        $collection = [];

        foreach ($passagesData as $passage) {
            $collection[] = Passage::createFromArray($passage);
        }

        return new self ($collection);
    }
}