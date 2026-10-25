<?php

namespace Lomi;

class LomiException extends \Exception
{
    public ?array $body;

    public function __construct(string $message, int $code = 0, ?array $body = null)
    {
        parent::__construct($message, $code);
        $this->body = $body;
    }
}
