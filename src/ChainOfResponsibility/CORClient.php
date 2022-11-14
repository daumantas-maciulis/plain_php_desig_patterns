<?php

declare(strict_types=1);

namespace Mentee\ChainOfResponsibility;

use Mentee\ChainOfResponsibility\Model\User;

class CORClient
{
    public function run(): void
    {
        $user = new User();
        $user
            ->setUsername('Daumantas')
            ->setPassword('Plain text password')
            ->setRoles(['ROLE_ADMIN']);

        $checker = new UserCredentialsChecker();
        $checker
            ->linkWith(new UserRoleChecker());

        $isAllowedToConnect = $checker->check($user);

        if ($isAllowedToConnect) {
            echo 'User is connected' . PHP_EOL;
        }
    }
}
