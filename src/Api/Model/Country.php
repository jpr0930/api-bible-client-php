<?php

namespace ApiBibleClient\Api\Model;

/**
 * Class Country
 * @package ApiBibleClient\Api\Model
 */
final class Country {

    /** @var string */
    private $id;
    /** @var string */
    private $name;
    /** @var string */
    private $nameLocal;

    /**
     * Country constructor.
     * @param string $id
     * @param string $name
     * @param string $nameLocal
     */
    public function __construct(
        string $id,
        string $name,
        string $nameLocal
    ) {
        $this->id        = $id;
        $this->name      = $name;
        $this->nameLocal = $nameLocal;
    }

    /**
     * @param array $countryData
     * @return static
     */
    public static function createFromArray(array $countryData): self {
        return new static(
            $countryData['id'],
            $countryData['name'],
            $countryData['nameLocal'],
        );
    }

    /**
     * @return string
     */
    public function getId(): string {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getNameLocal(): string {
        return $this->nameLocal;
    }

}