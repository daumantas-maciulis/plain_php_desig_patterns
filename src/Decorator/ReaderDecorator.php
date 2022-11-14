<?php

declare(strict_types = 1);

namespace Mentee\Decorator;

abstract class ReaderDecorator implements ReaderInterface
{
    private ReaderInterface $reader;

    public function __construct(ReaderInterface $reader)
    {
        $this->reader = $reader;
    }

    public function read(): string
    {
        return $this->reader->read();
    }
}
