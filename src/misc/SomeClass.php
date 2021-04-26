<?php

namespace misc;

class SomeClass
{
    private int|float $number = 2.2;
    private $stuff = null;

    public function test(string ...$strings)
    {

    }

    public function setNumber(int|float $number)
    {
        $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getStuff()
    {
        return $this->stuff;
    }
}