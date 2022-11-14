<?php

declare(strict_types = 1);

namespace Mentee\Decorator;

class WordShuffler extends ReaderDecorator
{
    public function read(): string
    {
        $array = explode(",", parent::read());

        shuffle($array);

        return implode(", ", $array);
    }
}
