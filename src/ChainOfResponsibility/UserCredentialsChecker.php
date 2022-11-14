<?php

declare(strict_types = 1);

namespace Mentee\ChainOfResponsibility;

use Mentee\ChainOfResponsibility\Model\User;

class UserCredentialsChecker extends AbstractUserChecker
{
    private const ALLOWED_USERS = [
        'Daumantas',
        'Petras',
    ];

    public function check(User $user): bool
    {
        if (!in_array($user->getUsername(), self::ALLOWED_USERS)) {
            echo 'This user is not allowed to connect' . PHP_EOL;

            return false;
        }

        return parent::check($user);
    }
}
