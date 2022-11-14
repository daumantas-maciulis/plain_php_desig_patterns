<?php

declare(strict_types = 1);

namespace Mentee\Decorator;

class ArrayReader implements ReaderInterface
{
    private const PAYLOAD = 'Mother, FATHER, sister';

    public function read(): string
    {
        return self::PAYLOAD;
    }
}
