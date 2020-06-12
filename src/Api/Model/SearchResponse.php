<?php

namespace ApiBibleClient\Api\Model;

use ApiBibleClient\Api\Collection\PassageCollection;
use ApiBibleClient\Api\Collection\VerseSearchCollection;

/**
 * Class SearchResponse
 * @package ApiBibleClient\Api\Model
 */
class SearchResponse {

    /** @var string */
    private $query;
    /** @var int */
    private $limit;
    /** @var int */
    private $offset;
    /** @var int */
    private $total;
    /** @var VerseSearchCollection */
    private $verses;
    private $passages;

    /**
     * SearchResponse constructor.
     * @param string                $query
     * @param int                   $limit
     * @param int                   $offset
     * @param int                   $total
     * @param VerseSearchCollection $verses
     * @param PassageCollection     $passages
     */
    public function __construct(
        string $query,
        int $limit,
        int $offset,
        int $total,
        VerseSearchCollection $verses,
        PassageCollection $passages
    ) {
        $this->query    = $query;
        $this->limit    = $limit;
        $this->offset   = $offset;
        $this->total    = $total;
        $this->verses   = $verses;
        $this->passages = $passages;
    }

    /**
     * @param array $searchData
     * @return static
     */
    public static function createFromArray(array $searchData): self {
        return new static(
            $searchData['query'],
            $searchData['limit'],
            $searchData['offset'],
            $searchData['total'],
            VerseSearchCollection::createFromArray($searchData['verses'] ?? []),
            PassageCollection::createFromArray($searchData['passages'] ?? [])
        );
    }

    /**
     * @return string
     */
    public function getQuery(): string {
        return $this->query;
    }

    /**
     * @return int
     */
    public function getLimit(): int {
        return $this->limit;
    }

    /**
     * @return int
     */
    public function getOffset(): int {
        return $this->offset;
    }

    /**
     * @return int
     */
    public function getTotal(): int {
        return $this->total;
    }

    /**
     * @return VerseSearchCollection
     */
    public function getVerses(): VerseSearchCollection {
        return $this->verses;
    }

    /**
     * @return PassageCollection
     */
    public function getPassages(): PassageCollection {
        return $this->passages;
    }
}