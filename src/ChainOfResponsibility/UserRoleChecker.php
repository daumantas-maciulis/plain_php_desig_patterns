<?php

declare(strict_types = 1);

namespace Mentee\ChainOfResponsibility;

use Mentee\ChainOfResponsibility\Model\User;

class UserRoleChecker extends AbstractUserChecker
{
    private const ALLOWED_ROLES  = 'ROLE_ADMIN';

    public function check(User $user): bool
    {
        if (!in_array(self::ALLOWED_ROLES, $user->getRoles())) {
            echo 'Only users with admin role are allowed' . PHP_EOL;

            return false;
        }

        return parent::check($user);
    }
}
