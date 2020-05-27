<?php

namespace ApiBibleClient\Api\Collection;

use ArrayAccess;
use ArrayIterator;
use Countable;
use InvalidArgumentException;
use IteratorAggregate;
use JsonSerializable;
use OutOfBoundsException;

/**
 * Class CollectionBase
 * @package ApiBibleClient\Api\Collection
 */
abstract class CollectionBase implements ArrayAccess, Countable, IteratorAggregate, JsonSerializable {
    /** @var array */
    protected $elements = [];
    /** @var string */
    protected $acceptedType;

    /**
     * CollectionBase constructor.
     * @param string         $acceptedType
     * @param array|iterable $values
     */
    public function __construct(string $acceptedType, iterable $values = []) {
        $this->acceptedType = $acceptedType;
        foreach ($values as $key => $value) {
            $this->offsetSet($key, $value);
        }
    }

    /**
     * Implementation of \ArrayAccess::OffsetSet
     *
     * This enforces all values in the collection are of compatible types
     *
     * @param mixed $offset
     * @param mixed $value
     * @throws InvalidArgumentException if an unsuitable object is offered for insertion
     */
    public function offsetSet($offset, $value) {
        if (!$value instanceof $this->acceptedType) {
            throw new InvalidArgumentException("Only objects of type '{$this->acceptedType}' are accepted");
        }

        if ($offset === null) {
            $this->elements[] = $value;
        } else {
            $this->elements[$offset] = $value;
        }
    }

    /**
     * Implementation of \ArrayAccess::offsetGet
     *
     * @throws OutOfBoundsException if the offset does not exist
     *
     */
    public function offsetGet($key) {
        $this->assertOffsetExists($key);
        return $this->elements[$key];
    }

    /**
     * @param $key
     */
    private function assertOffsetExists($key) {
        if (!$this->offsetExists($key)) {
            throw new OutOfBoundsException("No entry found for '{$key}'");
        }
    }

    /**
     * Implementation of \ArrayAccess::offsetExists
     */
    public function offsetExists($key) {
        return array_key_exists($key, $this->elements);
    }

    /**
     * Implementation of \ArrayAccess::offsetUnset
     *
     * @throws OutOfBoundsException if the offset does not exist
     *
     */
    public function offsetUnset($key) {
        $this->assertOffsetExists($key);
        unset($this->elements[$key]);
    }

    /**
     * Implementation of \Countable
     */
    public function count() {
        return count($this->elements);
    }

    /**
     * Implementation of \IteratorAggregate
     *
     */
    public function getIterator() {
        return new ArrayIterator($this->elements);
    }

    /**
     * Helper function to return all values
     */
    public function values() {
        return array_values($this->elements);
    }

    /**
     * @return bool
     */
    public function isEmpty(): bool {
        return count($this->elements) === 0;
    }

    /**
     * This is necessary for the implementation of the Jsonserializable interface
     *
     * @return array
     */
    public function jsonSerialize() {
        return $this->elements;
    }
}