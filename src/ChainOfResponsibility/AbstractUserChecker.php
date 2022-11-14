<?php

declare(strict_types = 1);

namespace Mentee\ChainOfResponsibility;

use Mentee\ChainOfResponsibility\Model\User;

abstract class AbstractUserChecker
{
    private ?AbstractUserChecker $next = null;

    public function linkWith(AbstractUserChecker $next): AbstractUserChecker
    {
        $this->next = $next;

        return $next;
    }

    public function check(User $user): bool
    {
        if (!$this->next) {
            return true;
        }

        return $this->next->check($user);
    }
}
