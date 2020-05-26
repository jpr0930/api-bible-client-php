<?php

namespace ApiBibleClient\Api;

class Country {

    /** @var string */
    private $id;
    /** @var string */
    private $name;
    /** @var string */
    private $nameLocal;

    public function __construct(
        string $id,
        string $name,
        string $nameLocal
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->nameLocal = $nameLocal;
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