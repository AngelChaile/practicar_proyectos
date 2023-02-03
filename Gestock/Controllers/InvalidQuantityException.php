<?php

class InvalidQuantityException extends Exception
{
    public function __construct(string $message = "", int $code = 0, ?Throwable $previous)
    {
        parent::__construct($message, $code, $previous);
    }
}