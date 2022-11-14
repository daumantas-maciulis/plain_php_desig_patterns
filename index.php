<?php

declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';

use Mentee\ChainOfResponsibility\CORClient;
use Mentee\Decorator\DecoratorClient;

//$chainOfResponsibility = new CORClient();
//$chainOfResponsibility->run();

$decorator = new DecoratorClient();
$decorator->getWords();