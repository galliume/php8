<?php

namespace attributes;

#[Attribute]
class SomeAttribute
{
    private int|float $number; //union types
    public function __construct(string $text)
    {
        public string $message = $text; // constructor property promotion

        echo "SomeAttribute construced : $message";
    }
}