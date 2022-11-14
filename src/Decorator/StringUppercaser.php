<?php

declare(strict_types = 1);

namespace Mentee\Decorator;

class StringUppercaser extends ReaderDecorator
{
    public function read(): string
    {
        return strtoupper(parent::read());
    }
}
