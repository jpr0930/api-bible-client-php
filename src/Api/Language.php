<?php

namespace ApiBibleClient\Api;

class Language {

    /** @var string */
    private $id;
    /** @var string */
    private $name;
    /** @var string */
    private $nameLocal;
    /** @var string */
    private $script;
    /** @var string */
    private $scriptDirection;

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
        $this->script = $script;
        $this->scriptDirection = $scriptDirection;
    }

    public static function createFromArray(array $language_data): self {
        return new static(
            $language_data['id'],
            $language_data['name'],
            $language_data['nameLocal'],
            $language_data['script'],
            $language_data['scriptDirection'],
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
    public function getScript(): string {
        return $this->script;
    }

    /**
     * @return string
     */
    public function getScriptDirection(): string {
        return $this->scriptDirection;
    }


}