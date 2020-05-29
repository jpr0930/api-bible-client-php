<?php

namespace ApiBibleClient\Api\Model;

/**
 * Class AudioBible
 * @package ApiBibleClient\Api\Model
 */
final class AudioBible {

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

    /**
     * AudioBible constructor.
     * @param string      $id
     * @param string      $name
     * @param string      $nameLocal
     * @param string|null $description
     * @param string|null $descriptionLocal
     */
    public function __construct(
        string $id,
        string $name,
        string $nameLocal,
        ?string $description,
        ?string $descriptionLocal
    ) {
        $this->id               = $id;
        $this->name             = $name;
        $this->nameLocal        = $nameLocal;
        $this->description      = $description;
        $this->descriptionLocal = $descriptionLocal;
    }

    /**
     * @param array $audioBibleData
     * @return static
     */
    public static function createFromArray(array $audioBibleData): self {
        return new static(
            $audioBibleData['id'],
            $audioBibleData['name'],
            $audioBibleData['nameLocal'],
            $audioBibleData['description'],
            $audioBibleData['descriptionLocal'],
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