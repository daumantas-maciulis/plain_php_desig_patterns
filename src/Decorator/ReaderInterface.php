<?php

declare(strict_types = 1);

namespace Mentee\Decorator;

interface ReaderInterface
{
    public function read(): string;
}