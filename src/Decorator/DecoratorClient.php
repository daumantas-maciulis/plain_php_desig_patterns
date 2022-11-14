<?php

declare(strict_types=1);

namespace Mentee\Decorator;

class DecoratorClient
{
    public function getWords(): void
    {
        $reader = new ArrayReader();
        $decorator1 = new WordShuffler($reader);
        $decorator2 = new StringUppercaser($decorator1);

        echo $decorator2->read() . PHP_EOL;
    }
}