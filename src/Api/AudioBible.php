<?php

namespace ApiBibleClient\Api;

class AudioBible {

    /** @var string */
    private $id;
    /** @var string */
    private $name;
    /** @var string */
    private $nameLocal;
    /** @var string */
    private $description;
    /** @var string */
    private $descriptionLocal;

    public function __construct(
        string $id,
        string $name,
        string $nameLocal,
        string $script,
        string $scriptDirection
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->nameLocal = $nameLocal;
        $this->description = $script;
        $this->descriptionLocal = $scriptDirection;
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

    /**
     * @return string
     */
    public function getDescription(): string {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getDescriptionLocal(): string {
        return $this->descriptionLocal;
    }


}