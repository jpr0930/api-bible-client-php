<?php

namespace ApiBibleClient\Api\Model;

/**
 * Class Passage
 * @package ApiBibleClient\Api\Model
 */
final class Passage {

    /** @var string */
    private $id;
    /** @var string */
    private $bibleId;
    /** @var string */
    private $orgId;
    /** @var string */
    private $content;
    /** @var string */
    private $reference;
    /** @var string */
    private $copyright;

    /**
     * Country constructor.
     * @param string $id
     * @param string $bibleId
     * @param string $orgId
     * @param string $content
     * @param string $reference
     * @param string $copyright
     */
    public function __construct(
        string $id,
        string $bibleId,
        string $orgId,
        string $content,
        string $reference,
        string $copyright
    ) {
        $this->id        = $id;
        $this->bibleId   = $bibleId;
        $this->orgId     = $orgId;
        $this->content   = $content;
        $this->reference = $reference;
        $this->copyright = $copyright;
    }

    /**
     * @param array $passageData
     * @return static
     */
    public static function createFromArray(array $passageData): self {
        return new static(
            $passageData['id'],
            $passageData['bibleId'],
            $passageData['orgId'],
            $passageData['content'],
            $passageData['reference'],
            $passageData['copyright'],
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
    public function getBibleId(): string {
        return $this->bibleId;
    }

    /**
     * @return string
     */
    public function getOrgId(): string {
        return $this->orgId;
    }

    /**
     * @return string
     */
    public function getContent(): string {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getReference(): string {
        return $this->reference;
    }

    /**
     * @return string
     */
    public function getCopyright(): string {
        return $this->copyright;
    }

}