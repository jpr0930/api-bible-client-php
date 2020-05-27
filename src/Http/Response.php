<?php

namespace ApiBibleClient\Http;

use function json_decode;

/**
 * Class Response
 * @package ApiBibleClient\Http
 */
class Response {
    /** @var array|null */
    protected $headers;
    /** @var string|null */
    protected $content;
    /** @var int */
    protected $statusCode;

    /**
     * Response constructor.
     * @param int         $statusCode
     * @param string|null $content
     * @param array|null  $headers
     */
    public function __construct(int $statusCode, ?string $content, ?array $headers = []) {
        $this->statusCode = $statusCode;
        $this->content    = $content;
        $this->headers    = $headers;
    }

    /**
     * @return mixed
     */
    public function getContent() {
        return json_decode($this->content, true);
    }

    /**
     * @return array
     */
    public function getHeaders(): array {
        return $this->headers;
    }

    /**
     * @return bool
     */
    public function ok(): bool {
        return $this->getStatusCode() < 400;
    }

    /**
     * @return int
     */
    public function getStatusCode(): int {
        return $this->statusCode;
    }

}